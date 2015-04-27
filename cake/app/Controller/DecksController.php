<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 26/4/2558
 * Time: 0:26
 */

App::uses('AppController', 'Controller');

class DecksController extends AppController{
    public function add() {
        $this->loadModel('Category');
        $categorys = $this->Category->find('all', [
            'order' => [
                'Category.name' => 'ASC'
            ]
        ]);
        $this->set('categorys', $categorys);
        if($this->request->is('POST')){
            $User = $this->Session->read('User');
            //pr($this->request->data);
            $data = [
                'Deck' => [
                    'name' => trim($this->request->data['Deck']['deckname']),
                    'description' => trim($this->request->data['Deck']['description']),
                    'status' => 'test',
                    'user_id' => $User['User']['id'],
                    'category_id' => '1',
                    'created' => date("Y-m-d H:i:s"),
                    'modified' => date("Y-m-d H:i:s")
                ]
            ];
            if($this->Deck->saveAssociated($data)){
                $data1 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front1'],
                        'back' =>$this->request->data['Deck']['back1'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data2 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front2'],
                        'back' =>$this->request->data['Deck']['back2'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];

                $data3 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front3'],
                        'back' =>$this->request->data['Deck']['back3'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data4 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front4'],
                        'back' =>$this->request->data['Deck']['back4'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data5 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front5'],
                        'back' =>$this->request->data['Deck']['back5'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data6 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front6'],
                        'back' =>$this->request->data['Deck']['back6'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data7 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front7'],
                        'back' =>$this->request->data['Deck']['back7'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data8 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front8'],
                        'back' =>$this->request->data['Deck']['back8'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data9 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front9'],
                        'back' =>$this->request->data['Deck']['back9'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data10 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front10'],
                        'back' =>$this->request->data['Deck']['back10'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data11 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front11'],
                        'back' =>$this->request->data['Deck']['back11'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data12 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front12'],
                        'back' =>$this->request->data['Deck']['back12'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data13 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front13'],
                        'back' =>$this->request->data['Deck']['back13'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data14 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front14'],
                        'back' =>$this->request->data['Deck']['back14'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $data15 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front15'],
                        'back' =>$this->request->data['Deck']['back15'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->loadModel('Card');
                $this->Card->create();
                $this->Card->saveAll($data1);
                $this->Card->saveAll($data2);
                $this->Card->saveAll($data3);
                $this->Card->saveAll($data4);
                $this->Card->saveAll($data5);
                $this->Card->saveAll($data6);
                $this->Card->saveAll($data7);
                $this->Card->saveAll($data8);
                $this->Card->saveAll($data9);
                $this->Card->saveAll($data10);
                $this->Card->saveAll($data11);
                $this->Card->saveAll($data12);
                $this->Card->saveAll($data13);
                $this->Card->saveAll($data14);
                $this->Card->saveAll($data15);
                $this->Session->setFlash('Create quiz is success','default', array("class" => 'alert alert-success'));
                $this->redirect([
                    'controller' => 'users',
                    'action' => 'index'
                ]);
            }else{
                $this->Session->setFlash('Create quiz is fail','default', array("class" => 'alert alert-danger'));
            }
        }

    }

    function uploadFiles($image=null,$name=null)
    {
        $image = $image;
        //allowed image types
        $imageTypes = array("image/gif", "image/jpeg", "image/png");
        //upload folder - make sure to create one in webroot
        $uploadFolder = "/img/profilepic";
        //full path to upload folder
        $uploadPath = WWW_ROOT . $uploadFolder;

        //check if image type fits one of allowed types
        foreach ($imageTypes as $type) {
            if ($type == $image['type']) {
                if ($image['error'] == 0) {
                    //image file name
                    $imageName = $image['name'];
//                    //check if file exists in upload folder
//                    if (file_exists($uploadPath . '/' . $imageName)) {
//                        //create full filename with timestamp
//                        $imageName = date('His') . $imageName;
//                    }
                    //create full path with image name
                    $full_image_path = $uploadPath . '/' . $imageName;
                    //upload image to upload folder
                    if (move_uploaded_file($image['tmp_name'], $full_image_path)) {
                        $this->Session->setFlash('File saved successfully');
                        //$this->set('imageName',$imageName);
                    } else {
                        $this->Session->setFlash('There was a problem uploading file. Please try again.');
                    }
                } else {
                    $this->Session->setFlash('Error uploading file.');
                }
                break;
            } else {
                $this->Session->setFlash('Unacceptable file type');
            }
        }
    }
}