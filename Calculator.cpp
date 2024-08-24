#include<iostream>
using namespace std;
int main(){
	int choice,a,b;
	do{
			cout<<"Enter 1 for addition"<<endl;
			cout<<"Enter 2 for Subtraction"<<endl;
			cout<<"Enter 3 for Multiplication"<<endl;
			cout<<"Enter 4 for Division"<<endl;
			cout<<"Enter 5 for Modulo"<<endl;
			cout<<endl;
			
			cout<<"Enter value of a: ";
			cin>>a;
			cout<<"Enter value of b: ";
			cin>>b;
			
			cout<<endl;
			
			cout<<"Enter your choice: ";
			cin>>choice;
			cout<<endl;
				switch(choice){
					case 1: cout<<"Addition of two no.s is: "<<a+b<<endl;
					break;
					case 2: cout<<"Subtraction of two no.s is: "<<a-b<<endl;
					break;
					case 3: cout<<"Multiplicatio of two no.s is: "<<a*b<<endl;
					break;
					case 4: cout<<"Division of two no.s is: "<<a/b<<endl;
					break;
					case 5: cout<<"Modulo of two no.s is: "<<a%b<<endl;
					break;
					case 6: cout<<"Thank you"<<endl;
					break;
					default: cout<<"Enter no.s from 1 to 5";
					break;
					}	
			}while(choice != 6);
		}
