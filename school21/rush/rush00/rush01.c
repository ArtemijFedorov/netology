/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   rush01.c                                           :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: edaella- <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2018/09/23 12:59:17 by edaella-          #+#    #+#             */
/*   Updated: 2018/09/23 13:27:35 by edaella-         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

void	ft_putchar(char c);

void	ft_print_top(int x)
{
	ft_putchar('/');
	while (x > 2)
	{
		ft_putchar('*');
		x--;
	}
	if (x > 1)
	{
		ft_putchar('\\');
	}
	ft_putchar('\n');
}

void	ft_print_middle(int x)
{
	ft_putchar('*');
	while (x > 2)
	{
		ft_putchar(' ');
		x--;
	}
	if (x > 1)
	{
		ft_putchar('*');
	}
	ft_putchar('\n');
}

void	ft_print_bottom(int x)
{
	ft_putchar('\\');
	while (x > 2)
	{
		ft_putchar('*');
		x--;
	}
	if (x > 1)
	{
		ft_putchar('/');
	}
	ft_putchar('\n');
}

void	rush(int x, int y)
{
	if (x <= 0 || y <= 0)
	{
		return ;
	}
	ft_print_top(x);
	while (y > 2)
	{
		ft_print_middle(x);
		y--;
	}
	if (y > 1)
	{
		ft_print_bottom(x);
	}
}
