<?php
include 'Node.php';

class LinkedList
{
    public $head;
    
    //constructor to create an empty LinkedList
    public function __construct()
    {
        $this->head = null;
    }

    //Add new element at the start of the list
    public function push_front($newElementAtFront)
    {
        $newNodeFront = new Node();
        $newNodeFront->data = $newElementAtFront;
        $newNodeFront->next = null;
        $newNodeFront->prev = null;
        if($this->head == null){
            $this->head = $newNodeFront;
        } else {
            $this->head->prev = $newNodeFront;
            $newNodeFront->next = $this->head;
            $this->head = $newNodeFront;
        }
    }

    //Add new element at the end of the list
    public function push_back($newElementAtBack)
    {
        $newNodeBack = new Node();
        $newNodeBack->data = $newElementAtBack;
        $newNodeBack->next = null;
        $newNodeBack->prev = null;
        if($this->head == null){
            $this->head = $newNodeBack;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while($temp->next != null){
                $temp = $temp->next;
            }
            $temp->next = $newNodeBack;
            $newNodeBack->prev = $temp;
        }
    }

    //display the content of the list
    public function printlist(){
        $temp = new Node();
        $temp = $this->head;
        if($temp != null)
        {
            echo "The list contains: ";
            while($temp != null)
            {
                echo $temp->data." ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
}

//create an empty LinkedList
$MyList = new LinkedList();
//Add first node.
$first = new Node();
$first->data = 40;
$first->next=null;
$first->prev = null;
//linked with head node
$MyList->head=$first;


//Add second node
$second = new Node();
$second->data=50;
$second->next = null;
//linking with first node
$second->prev = $first;
$first->next = $second;

//Add third node.
$third = new Node();
$third->data = 60;
$third->next = null;
//linking with second node
$third->prev = $second;
$second->next = $third;

//print the content of list
$MyList->printlist();

//Add three elements at the start of the list
$MyList->push_front(30);
$MyList->push_front(20);
$MyList->push_front(10);
$MyList->printlist();

//Add three elements at the back of the list
$MyList->push_back(70);
$MyList->push_back(80);
$MyList->push_back(90);
$MyList->printlist();