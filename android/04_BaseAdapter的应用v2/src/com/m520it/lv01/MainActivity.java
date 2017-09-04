package com.m520it.lv01;

import java.util.ArrayList;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.ListAdapter;
import android.widget.ListView;

public class MainActivity extends Activity {

	private ListView mListView ;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		//1.����һ���б�
		mListView = (ListView) findViewById(R.id.lv);
		//2.����һЩ����
		ArrayList<String> datas=new ArrayList<String>();
		for (int i = 0; i < 150; i++) {
			datas.add("����:"+i);
		}
		//3.�����ݵ��뵽ListView
		MyAdapter adapter=new MyAdapter(datas);
		mListView.setAdapter(adapter);
	}


}
