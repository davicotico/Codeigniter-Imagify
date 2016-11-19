<?php
/**
 * Codeigniter Imagify
 * @author David Ticona Saravia <david.ticona.saravia@gmail.com>
 * @version 1.0
 * @link http://codeignitertutoriales.com Blog del autor
 * 
 */
require APPPATH.'third_party/Imagify/class-imagify.php';
class Imagify extends Imagify\Optimizer
{
    private $api_key = '2a4782c19c0524a763a07e2317f8a2ff266a1558';
    /**
     * Constructor
     * @param array $options Array de opciones
     */
    public function __construct(array $options)
    {
        $this->api_key = isset($options['api_key']) ? $options['api_key'] : $this->api_key;
        if ($this->api_key==='')
        {
            die("API KEY not found");
        }
        $api_key = $options['api_key'];
        parent::__construct($api_key);
    }
}
