#include <bits/stdc++.h>
using namespace std;

int main() {
  // 左辺(の型)に計算結果が格納される(cと一緒?)
  // 正しくは「int型とdouble型の計算結果はdouble型」になる
  cout << (double)1 / 2 * 100 * (100 + 1) << endl;
  // cout << ( (double)(1 / 2) * 100) * (100 + 1) << endl;
  // cout << 1 / 2 << endl; // 0 小数点が表示されない
  // cout << (double)1 / 2 << endl; // 0.5 小数点が表示される
}
