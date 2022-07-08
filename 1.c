#include	<stdio.h>

int main(void)
{
	int n;

	printf("n = ");
	scanf("%d", &n);	/* */

	if( (n & 1) == 0 ){	/* ==の方が&よりも優先順位が高いため先に計算されてしまう  */
		printf("%d は偶数です\n", n);
	}
	return 0;
}
