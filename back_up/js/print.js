function setPrintCSS(isPrint) {
  if (document.getElementsByTagName)
      x = document.getElementsByTagName('link');
  else if (document.all)
      x = document.all.tags('link');
  else
  {
      alert('��������, ���� ������ �� �������� � ����� ��������');
      return;
  }

  for (var i=0;i<x.length;i++) {
      if(x[i].title == 'printview'){x[i].disabled = !isPrint;}
      if(x[i].title == 'screenview'){x[i].disabled = isPrint;}
  }
}