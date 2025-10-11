<?php

namespace App\Controllers;

use App\Models\Posts;
use App\Models\Visiteurs;
use App\Models\Cours;

class Site extends BaseController
{
    protected $session;
    private $db;

    public function __construct(){
        model('App\Models\Posts');
        model('App\Models\Visiteurs');
        model('App\Models\Cours');
        helper(['form', 'url']);
        $this->db = \Config\Database::connect();
    }
    public function index(): string
    {
        $datas =[
            'titre'=>'Accueil',
        ];
        return $this->datas('index', $datas);
    }
    public function connexionLivres(){
        $datas =['titre'=>'Se connecter',];
        return $this->datas('signin', $datas);
    }
    public function connexionCours(){
        $datas =['titre'=>'Se connecter',];
        return $this->datas('signinCours', $datas);
    }
    public function contact(): string{
        $datas =['titre'=>'Contact',];
        return $this->datas('contact', $datas);
    }
    public function posts(){
        $this->session = session();
        $model = new Posts();
        $prenom = htmlspecialchars($this->request->getVar('prenom'));
        $email = $this->request->getVar('email');
        $sujet = htmlspecialchars($this->request->getVar('sujet'));
        $message = htmlspecialchars($this->request->getVar('message'));

        $datas =[
            'prenom'=>$prenom,
            'email'=>$email,
            'sujet'=>$sujet,
            'message'=>$message
            ];
        if ($model->insert($datas)){
            $this->session->setFlashdata('success', 'Post transmis avec succès');
            return redirect()->to('/');
        }
    }
    public function about(){
        $datas =['titre'=>'A propos',];
        return $this->datas('about', $datas);
    }
    public function ouvrages(){
        if (!session()->has('user')) {
            return redirect()->to('/');
        }
        $model = new Cours();
        $all_cours = $model->findAll();
        $datas =['titre'=>'Ouvrages', 'all_cours'=>$all_cours];
        return $this->datas('ouvrages', $datas);
    }
    public function cours(){
        $datas =['titre'=>'Cours',];
        return $this->datas('cours', $datas);
    }
    public function signin(){
        $this->session =  session();
        $visit = new Visiteurs();
        $email = $this->request->getPost('email');
        $pwd = $this->request->getPost('pwd');
        $password = sha1($pwd);
        $result = $visit->where(['email'=> $email])->first();

        if (empty($result)){
            $this->session->setFlashdata('echec_mail_visit', 'Coordonnées introuvables');
            return redirect()->to(site_url('ouvrages'));
        }elseif($result['pwd'] != $password){
            $this->session->setFlashdata('faild_pwd_visit', 'Mot de passe incorrect');
            return redirect()->to(site_url('ouvrages'));
        }else{
            $this->session->set('user', $result);
            $this->session->setFlashdata('success_login_visit', 'Connexion réussie');
            return redirect()->to('livres');
        }
    }
    public function signinCours(){
        $this->session =  session();
        $visit = new Visiteurs();
        $email = $this->request->getPost('email');
        $pwd = $this->request->getPost('pwd');
        $password = sha1($pwd);
        $result = $visit->where(['email'=> $email])->first();

        if (empty($result)){
            $this->session->setFlashdata('echec_mail_visit', 'Coordonnées introuvables');
            return redirect()->to(site_url('ouvrages'));
        }elseif($result['pwd'] != $password){
            $this->session->setFlashdata('faild_pwd_visit', 'Mot de passe incorrect');
            return redirect()->to(site_url('ouvrages'));
        }else{
            $this->session->set('user', $result);
            $this->session->setFlashdata('success_login_visit', 'Connexion réussie');
            return redirect()->to('livres');
        }
    }
    
    public function logout(){
        session()->remove('logged_user');
        session()->destroy();
        return redirect()->to(base_url());
    }
    public function register(){
        $datas =['titre'=>'Création compte',];
        return $this->datas('register', $datas);
    }

    /**
     * @throws \ReflectionException
     */
    public function saveUser(){
        $this->session = session();
        $validation = \Config\Services::validation();
        $check = $this->validate([
            'prenom'=>'required|max_length[25]',
            'nom'=>'required|max_length[25]',
            'email'=>'required',
            'pwd'=>'required',
            'ConfPwd'=>'required|matches[pwd]'
        ]);
        if (!$check){
            $data = ['titre'=>'Création compte',
                'validation'=>$this->validator];
            return $this->datas('register', $data);
        }else{
            $model = new Visiteurs();
            $prenom = htmlspecialchars($this->request->getVar('prenom'));
            $nom = htmlspecialchars($this->request->getVar('nom'));
            $email = $this->request->getVar('email');
            $pwd = sha1($this->request->getVar('pwd'));
            $confPwd = htmlspecialchars($this->request->getVar('confPwd'));

            $datas =[
                'prenom'=>$prenom,
                'nom'=>$nom,
                'email'=>$email,
                'pwd'=>$pwd
                ];
            if ($model->insert($datas)){
                $this->session->setFlashdata('success_register', 'Compte créé avec succès');
                return redirect()->to('/');
            }
        }        
    }
    public function plus(){
        $datas =['titre'=>'En savoir plus',];
        return $this->datas('en-savoir-plus', $datas);
    }
    public function learnMore(){
        $datas =['titre'=>'En savoir plus',];
        return $this->datas('learn-recherche', $datas);
    }
    public function learnPartenariat(){
        $datas =['titre'=>'En savoir plus',];
        return $this->datas('learn-partenariat', $datas);
    }
}

