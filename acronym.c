#include<stdio.h> 
#include <stdbool.h>
#include <ctype.h>
#include <stdlib.h>
#include <string.h>
#include <stdio.h>

  
// Function to find string which has first 
// character of each word. 
char firstLetterWord(char str[]) 
{ 
    char result[30] = ""; 
  
    // Traverse the string. 
    bool v = true; 
    for (int i=0; strlen(str); i++) 
    { 
        // If it is space, set v as true. 
        if (str[i] == ' ') 
            v = true; 
  
        // Else check if v is true or not. 
        // If true, copy character in output 
        // string and set v as false. 
        else if (str[i] != ' ' && v == true) 
        { 
            result[i]=str[i];
            v = false; 
        } 
    } 
  
    printf("%s", result); 
} 
  
// Driver cpde 
int main() 
{ 
    char str[30] = "geeks for geeks"; 
    firstLetterWord(str); 
    return 0; 
}