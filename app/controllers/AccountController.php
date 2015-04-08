<?php

class AccountController extends ControllerBase
{
    public function logOutAction()
    {
        $this->session->remove("user_id");
        $this->session->destroy();
        $this->cookies->get('user_id')->delete();
        $this->response->redirect('');
    }

    public function loginAction()
    {
        $this->view->setVar('nameField', '');
        if ($this->request->isPost())
        {
            $validation = new MyValidation();
            $post = $validation->filterLoginForm($this->request->getPost());
            $validation->validationLoginForm();
            $messages = $validation->validate($post);

            if (count($messages))
            {
                $this->view->setVar('errors', $messages);

                if ( !$validation->getMessages()->filter('name') )
                {
                    $this->view->setVar('nameField', $post['name']);
                }

            }
            else
            {
                $nameFromPost = $post['name'];
                $passFromPost = $post['password'];
                $user = Users::findFirstByLogin($nameFromPost);

                if (  $user && $this->security->checkHash($passFromPost, $user->getPassword()) )
                {
                    $idUser = $user->getIdUser();
                    $this->session->set("user_id", $idUser);
                    if ( $this->request->getPost('remember') )
                    {
                        $this->cookies->set('user_id', $idUser);

                    }
                    $this->response->redirect('');

                }
                else
                {
                    $this->flashSession->error("Username and Password combination not found");
                }
            }

        }
    }

    public function registrationAction()
    {

        $this->view->setVar('nameField', '');
        $this->view->setVar('emailField', '');

        if ($this->request->isPost())
        {
            $validation = new MyValidation();
            $post = $validation->filterRegistrationForm($this->request->getPost());
            $validation->validationRegistrationForm();
            $messages = $validation->validate($post);

            if (count($messages))
            {
                $this->view->setVar('errors', $messages);

                if ( !$validation->getMessages()->filter('name') )
                {
                    $this->view->setVar('nameField', $post['name']);
                }

                if ( !$validation->getMessages()->filter('email') )
                {
                    $this->view->setVar('emailField', $post['email']);
                }

            }
            else
            {
                $nameFromPost = $post['name'];
                $emailFromPost = $post['email'];
                $userName = Users::findFirstByLogin($nameFromPost);
                $userPass = Users::findFirstByEmail($emailFromPost);
                if ( $userName )
                {
                    if ( $userName->getLogin() === $nameFromPost)
                    {
                        $this->flashSession->error("This name has already exit! Choose an other one.");
                        $this->view->setVar('emailField', $post['email']);
                    }
                }

                elseif ( $userPass )
                {
                    if ( $userPass->getEmail() === $emailFromPost)
                    {
                        $this->flashSession->error("This email has already exit! Choose an other one.");
                        $this->view->setVar('nameField', $post['name']);
                    }
                }
                else
                {
                    $user = new Users();
                    $user->setLogin($nameFromPost);
                    $user->setEmail($post['email']);
                    $user->setPassword($this->security->hash($post['password']));
                    if ( $user->save() )
                    {
                        $this->session->set("user_id", $user->getIdUser());
                        $this->response->redirect('');
                    }
                }

            }

        }

    }



}

