<?php
class Pages extends Controller {
    public function __construct() {
        // $this->userModel = $this->model('User');
    }

    public function index() {

        $data = [
            'title' => 'Home page',
            'name' => 'Nelson',
            'lastname' => 'Fernandez',
        ];

        $this->view('pages/index', $data);
    }

    public function about() {

        $data = [
            'profile' => 'Web Developer with a passion for web application. Hard working, organized, energetic and an eager person ready to learn.  Skilled in conceptualizing, designing, development, and deploying software containing logical and mathematical solutions to business problems. Dedicated to driving innovation with the ability to follow industry and technological trends and facilitating early adoption of ',
        ];


        $this->view('pages/about', $data);
        
    }

    public function contact() {

        $data = [
            'key'=>'123',
            'encrypt'=> 'abcd'
        ];

        $data['key']='key';
        $this->view('pages/contact', $data);
    }

    public function projects() {
        $data = [
            '1' =>[
                'img' => '/public/img/webson.PNG',
                'link_Preview' => 'Preview',
                'link_Preview_to' => 'https://webson.herokuapp.com/',
                'link_Github' => 'Github',
                'link_Github_to' => 'https://github.com/sonnellove/Webson/tree/master/',
                'description' => 'Facebook clone with built on "nodejs and React.js Framework"'
                ],
            '2' =>[
                'img' => '/public/img/webson_encryp_message.PNG',
                'link_Preview' => 'Preview',
                'link_Preview_to' => 'http://webson.freecluster.eu/',
                'link_Github' => '',
                'link_Github_to' => '#!',
                'description' => 'Message Decryption with provided Key with built on "core php"'
                ],
            '3' =>[
                'img' => '/public/img/porfolio.PNG',
                'link_Preview' => 'Preview',
                'link_Preview_to' => 'http://websonporfolio.freecluster.eu/',
                'link_Github' => 'Github',
                'link_Github_to' => 'https://github.com/sonnellove/websonPorfolio/',
                'description' => 'My Portfolio'

            ],
            // 'users' => $users
        ];
        $this->view('pages/projects', $data);
    }
}
