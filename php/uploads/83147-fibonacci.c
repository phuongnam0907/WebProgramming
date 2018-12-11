#include <stdio.h>

#define _CRT_SECURE_NO_WARNINGS

void bai4();
void posFibo();
void valFibo();

int main()
{
	bai4();
	getch();
	return 0;
}

void bai4() {
	int choice = 0;
	printf("Tinh day so Fibonacci!\n");
	printf("Co 2 lua chon: ");
	printf("Tinh theo so phan tu (1) - Tinh theo gia tri (2)\n");
	printf("Nhap cach lua chon cua ban: ");
	scanf("%d", &choice);
	while (choice != 1 && choice != 2) {
		printf("Nhap sai, moi ban nhap lai: ");
		scanf("%d", &choice);
	}
	switch (choice) {
	case 1:
		posFibo();
		break;
	case 2:
		valFibo();
		break;
	default:
		break;
	}
}

void posFibo() {
	int i, n, t1 = 0, t2 = 1, nextTerm = 0;

	FILE *f = fopen("Fibo.txt", "w");
	if (f == NULL)
	{
		printf("Error opening file!\n");
		return;
	}

	printf("Nhap so phan tu: ");
	scanf("%d", &n);

	printf("Chuoi Fibonacci: ");

	if (n <= 0) {
		printf("NULL\n");
		fprintf(f, "fibo() NULL\n");
		return;
	}
	else {
		for (i = 1; i <= n; ++i)
		{
			fprintf(f, "fibo(%d) %d\n", i-1, t1);
			printf("%d ", t1);
			nextTerm = t1 + t2;
			t1 = t2;
			t2 = nextTerm;
		}
	}
	fclose(f);
	printf("\nWrite file 'Fibo.txt' succeed!\n");
}

void valFibo() {

	int t1 = 0, t2 = 1, nextTerm = 0, n;

	FILE *f = fopen("Fibo.txt", "w");
	if (f == NULL)
	{
		printf("Error opening file!\n");
		return;
	}

	printf("Nhap gia tri >=2: ");
	scanf("%d", &n);

	printf("Chuoi Fibonacci: ");

	if (n < 0) {
		printf("NULL");
		fprintf(f, "fibo() NULL\n");
		return;
	}
	else if ((n >= 0) && (n < 2)) {
		printf("0 1 [default]");
		fprintf(f, "fibo(0) 0\nfibo(1) 1\n");
		return;
	}
	else {
		nextTerm = t1 + t2;
		int count = 3;
		printf("0 1 ");
		fprintf(f, "fibo(0) 0\nfibo(1) 1\n");
		while (nextTerm <= n)
		{
			fprintf(f, "fibo(%d) %d\n", count - 1, nextTerm);
			count++;
			printf("%d ", nextTerm);
			t1 = t2;
			t2 = nextTerm;
			nextTerm = t1 + t2;
		}
	}
	fclose(f);
}

