#include "ft_putchar.c"
#include "rush02.c"

void ft_putchar(char c);
void rush(int x, int y);

int main(void)
{
	rush(0, 1);
	ft_putchar('\n');
	rush(4, 4);
	ft_putchar('\n');
	rush(50, 50);
	ft_putchar('\n');
	rush(26, 26);
	ft_putchar('\n');
	rush(1, 1);
	ft_putchar('\n');
	rush(1, 20);
	ft_putchar('\n');
	return(0);
}
