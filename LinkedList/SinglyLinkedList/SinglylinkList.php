<?php
include 'node.php';
class LinkedList 
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    //Adding elements in link list
    public function addElement($elements)
    {
        $newNode = new Node();
        $newNode->data =$elements;
        // $newNode->next = null;
        if($this->head == null){
            
            $this->head = $newNode;
        }else{
            $temp = new Node();
            $temp = $this->head;
            while($temp->next != null){
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }

    }

    //Add element at the start of the list
    public function push_Front($newElementAtFront){
        $newNodeFront = new Node();
        $newNodeFront->data = $newElementAtFront;
        $newNodeFront->next = $this->head;
        $this->head = $newNodeFront;
    }

    //Add new element at the end of the list
    public function push_back($newElementAtBack)
    {
        $newNodeBack = new Node();
        $newNodeBack->data = $newElementAtBack;
        $newNodeBack->next = null;
        if($this->head == null){
            $this->head = $newNodeBack;
        } else{
            $temp = new Node();
            $temp = $this->head;
            while($temp->next != null){
                $temp = $temp->next;
            }
            $temp->next = $newNodeBack;
        }
    }

    public function printList(){
        $temp = new Node();
        $temp = $this->head;
        if($temp != null){
            echo "The list contains: ";
            while($temp != null){
                echo $temp->data." ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
};

//creating an empty LinkedList
$MyList =  new LinkedList();

$MyList->addElement(40);
$MyList->addElement(50);
$MyList->addElement(60);
//print the content of list
$MyList->PrintList();

//Add three elements at the Start of the list
$MyList->push_Front(30);
$MyList->push_Front(20);
$MyList->push_Front(10);
//print the content of list
$MyList-> PrintList();

//Add three elements at the end of the list.
$MyList->push_back(70);
$MyList->push_back(80);
$MyList->push_back(90);
$MyList->PrintList();
?>