// Online C++ compiler to run C++ program online
#include <iostream>

using namespace std;






class Animal {
    protected:
        int age;
    
    
    public:
        string name;
        
        Animal(string name, int age) : name(name), age(age) {};
        
        void birthday(){
            this->age++;
        }
};

class Dog : Animal {
   
    public:
        
        Dog(string name, int age) : Animal(name, age) {};
        
        void woof(){
            cout << "W-woof~! UwU 🐾🐶" << endl;
        }
};

class Cat : Animal{
    
    public:
        
        Cat(string name, int age) : Animal(name, age) {};
    
        void meow(){
            cout << "M-meeww~! UwU 🐱💫" << endl;
        }
};


int main() {

    
    Cat myCat("Mincis", 2);
    myCat.meow();

    return 0;
}
