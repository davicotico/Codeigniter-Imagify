<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
        this->load->view('welcome_message');
    }

    public function optimizar()
    {
        $this->load->library('imagify');
        $path = FCPATH.'public/';
        $options = array('keep_exif' => true, 'resize'=>array("width"=>250));
        $handle = $this->imagify->optimize($path.'foto-guitarra.jpg', $options);
        if (true === $handle->success)
        {
            $image_data = file_get_contents($handle->image);
            file_put_contents($path.'imagen_optimizada2.jpg', $image_data);
            echo '<h1>Imagen optimizada!</h1>';
        } else
        {
            echo '<h1>Error: ' . $handle->message . '</h1>';
        }
    }
}
