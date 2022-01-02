<?php
include 'Node.php';

class LinkedList{
    public $head;

    //constructor to create an empty LinkedList
    public function __construct(){
        $this->head = null;
    }

    //Add new elements at the start of the list
    public function push_front($newElementAtfront)
    {
        $newNodeFront = new Node();
        $newNodeFront->data = $newElementAtfront;
        $newNodeFront->next = null;
        if($this->head == null){
            $this->head = $newNodeFront;
            $newNodeFront->next = $this->head;
        } else{
            $temp = new Node();
            $temp = $this->head;
            while($temp->next !==$this->head){
                $temp = $temp ->next;
            }
            $temp->next = $newNodeFront;
            $newNodeFront->next = $this->head;
            $this->head=$newNodeFront;
        }
    }

     //Add new element at the end of the list
  public function push_back($newElementAtBack) {
    $newNodeBack = new Node();
    $newNodeBack->data = $newElementAtBack;
    $newNodeBack->next = null; 
    if($this->head == null) {
      $this->head = $newNodeBack;
      $newNodeBack->next = $this->head;
    } else {
      $temp = new Node();
      $temp = $this->head;
      while($temp->next !== $this->head) {
        $temp = $temp->next;
      }
      $temp->next = $newNodeBack;
      $newNodeBack->next = $this->head;
    }    
  }

    //display the content of the list
    public function printList(){
        $temp = new Node();
        $temp = $this->head;
        if($temp != null)
        {
            echo "The list Contains: ";
            while (true) {
                echo $temp->data." ";
                $temp =$temp->next;
                if($temp == $this->head)
                break;
            }
            echo "\n";
        } else {
            echo "The list is empty . \n";
        }
    }
}

$MyList = new LinkedList();

//Add first node
$first = new Node();
$first->data = 40;
//linking with head node
$MyList->head = $first;
//linking next of the node with head
$first->next = $MyList->head;

//Add second node
$second = new Node();
$second->data = 50;
//linking with first node
$first->next = $second;
//linking next of the node with head
$second->new = $MyList->head;

//Add third node.
$third = new Node();
$third->data = 60;
//linking with second node
$second->next = $third;
//linking next of the node with head
$third->next = $MyList->head;

//print the content of list
$MyList->PrintList(); 

//Add three elements at the start of the list.
$MyList->push_front(30);
$MyList->push_front(20);
$MyList->push_front(10);
$MyList->PrintList();

//Add three elements at the end of the list.
$MyList->push_back(70);
$MyList->push_back(80);
$MyList->push_back(90);
$MyList->PrintList();