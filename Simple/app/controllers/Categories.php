<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->loggedIn) {
            redirect('login');
        }

        if (!$this->Admin) {
            $this->session->set_flashdata('warning', 'Access denied!');
            redirect('forums');
        }

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        $this->load->model('categories_model');
    }

    public function add()
    {
        $this->form_validation->set_rules('name', lang('title'), 'required|trim');
        $this->form_validation->set_rules('description', lang('description'), 'required');
        $this->form_validation->set_rules('order', lang('order'), 'numeric');
        $this->form_validation->set_rules('slug', lang('slug'), 'trim|required|is_unique[categories.slug]');

        if ($this->form_validation->run() == true) {
            $data = [
                'name'        => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'parent_id'   => $this->input->post('parent_category'),
                'slug'        => $this->input->post('slug'),
                'active'      => $this->input->post('active'),
                'private'     => $this->input->post('private'),
                'order_no'    => $this->input->post('order'),
            ];
        } elseif ($this->input->post('add_category')) {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER'] ?? '/');
        }

        if ($this->form_validation->run() == true && $this->categories_model->addCategory($data)) {
            $this->session->set_flashdata('message', lang('category_added'));
            redirect('categories');
        } else {
            $this->data['parent_categories'] = $this->categories_model->getParentCategories();
            $this->data['error']             = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));
            $this->data['page_title']        = lang('new_category');
            $this->load->view($this->theme . 'categories/add', $this->data);
        }
    }

    public function delete($id = null)
    {
        if (DEMO) {
            $this->session->set_flashdata('warning', lang('disabled_in_demo'));
            redirect($_SERVER['HTTP_REFERER'] ?? '/');
        }

        if (!$this->Admin) {
            $this->session->set_flashdata('warning', lang('access_denied'));
            redirect($_SERVER['HTTP_REFERER']);
        }

        if ($this->categories_model->deleteCategory($id)) {
            $this->session->set_flashdata('message', lang('category_deleted'));
            redirect('categories');
        } else {
            $this->session->set_flashdata('error', lang('category_x_empty'));
            redirect('categories');
        }
    }

    public function edit($id = null)
    {
        $category = $this->categories_model->getCategoryByID($id);
        $this->form_validation->set_rules('name', lang('title'), 'required|trim');
        $this->form_validation->set_rules('description', lang('description'), 'required');
        $this->form_validation->set_rules('order', lang('order'), 'numeric');
        $this->form_validation->set_rules('slug', lang('slug'), 'trim|required');
        if ($category->slug != $this->input->post('slug')) {
            $this->form_validation->set_rules('slug', lang('slug'), 'is_unique[categories.slug]');
        }

        if ($this->form_validation->run() == true) {
            $data = [
                'name'        => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'parent_id'   => $this->input->post('parent_category'),
                'slug'        => $this->input->post('slug'),
                'active'      => $this->input->post('active'),
                'private'     => $this->input->post('private'),
                'order_no'    => $this->input->post('order'),
            ];
        }

        if ($this->form_validation->run() == true && $this->categories_model->updateCategory($id, $data)) {
            $this->session->set_flashdata('message', lang('category_updated'));
            redirect('categories');
        } else {
            $this->data['parent_categories'] = $this->categories_model->getParentCategories();
            $this->data['error']             = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));
            $this->data['page_title']        = lang('edit_category');
            $this->data['category']          = $category;
            $this->load->view($this->theme . 'categories/edit', $this->data);
        }
    }

    public function index($category_id = null)
    {
        $this->data['error']      = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        $category                 = $category_id ? $this->categories_model->getCategoryByID($category_id) : null;
        $this->data['parent']     = $category;
        $this->data['categories'] = $category_id ? $this->categories_model->getChildrenCategories($category_id) : $this->categories_model->getParentCategories();
        $this->data['page_title'] = $category ? lang('parent_category') . ' (' . $category->name . ')' : lang('categories');
        $this->page_construct('categories/index', $this->data);
    }
}
