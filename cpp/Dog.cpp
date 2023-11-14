// Online C++ compiler to run C++ program online
#include <iostream>

using namespace std;

class Car {
    private:
    

    public:
        // define values
        string brand;
        string model;
        string milage;
        
        int year;
    
        // Constructor
        Car(string brand, string model, int year, string milage){
            this->brand = brand;
            this->model = model;
            this->year = year;
            this->milage = milage;
        }
        
        // another way of doing ^
        //Car(string brand, string model, int year) : brand(brand), model(model), year(year) {}
        
    
        // Member function to make noise
        void makeNoise() {
            cout << "Vroom! Vroom!" << endl;
        }
    
        // Member function to display car information
        void displayInfo() {
            cout << "Brand: " << brand << ", Model: " << model << ", Year: " << year << endl;
            cout << "Milage: " << milage << endl;
        }
};


class Dog{
    private:
        int age;
    
    
    public:
        string name;
        
        Dog(string name, int age) : name(name), age(age) {}
        
        void birthday(){
            this->age++;
        }
        
        string woof(){
            return "W-woof~! UwU 🐾🐶";
        }
};

int main() {
    
    // Create an instance of the Car class
    //Car myCar("Toyota", "Camry", 2022, "12847981");

    // Display car information
    //myCar.displayInfo();

    // Make noise
    //myCar.makeNoise();
    
    Dog myDog("Reksis", 6);

    return 0;
}
