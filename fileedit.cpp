#include <iostream>
#include <fstream>
#include <string>
using namespace std;

int main () {
  string line;
  string fil;
  cout << "File: ";
  cin >> fil;
  string append;
  ofstream myfile(fil);
  if (myfile.is_open())
  {
    cout << "NOTE: Previous file contents erased!" << endl;
    cout << "NOTE: File contents not yet viewable in C++ version." << endl;
    cout << "Text to append: ";
    cin >> append;
    myfile << append << endl;
    myfile.close();
  }
  return 0;
}
