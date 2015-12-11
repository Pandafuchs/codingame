function r(a){var b=0;return 9>=a?a:(a.toString().split("").forEach(function(a){return b+=parseInt(a)}),r(b))}print(r(parseInt(readline())));


//Vielleicht auch:

#include <stdio.h>

int main(void)
{
   int number;
   scanf("%d", &number);

   printf("The digital root of %d is %d.", number, (1 + (number - 1) % 9));
}