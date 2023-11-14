// Online C++ compiler to run C++ program online
#include <iostream>

using namespace std;


class Cat{
    private:
        int age;
    
    
    public:
        string name;
        
        Cat(string name, int age) : name(name), age(age) {}
        
        void birthday(){
            this->age++;
        }
        
        void meow(){
            cout << "M-meeww~! UwU 🐱💫" << endl;
        }
};

int main() {

    
    Cat myCat("Mincis", 2);
    myCat.meow();

    return 0;
}
