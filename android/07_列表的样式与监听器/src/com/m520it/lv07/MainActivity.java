package com.m520it.lv07;

import java.util.ArrayList;

import android.app.Activity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AbsListView;
import android.widget.AbsListView.OnScrollListener;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ListView;
import android.widget.Toast;

public class MainActivity extends Activity {

	private MyAdapter adapter;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		//1.�ؼ��Ѿ�װ�������
		ListView lv = (ListView) findViewById(R.id.lv);
		adapter=new MyAdapter(this);
		//ϵͳ�ڲ��Զ�����ص��˶�� getCount()   getView()
		lv.setAdapter(adapter);
		
		//2.�����ǴӺ�̨���������ͻ���(�ӳ�)
		ArrayList<String> datas=new ArrayList<String>();
		for (int i = 0; i < 20; i++) {
			datas.add("����"+i);
		}
		//����ط�ֻ�Ǽ򵥵�setDatas() ��û�е���getCount()/getView()
		//����setAdapter���µĶ�ε���getCount()/getView()���ܻ�û������ ��ʱ����ִ�кܿ� 
		//����������setDatas��ʱ�����ݽ�ȥ�� ����ˢ�µ�ListView
		adapter.setDatas(datas);
		//�����˸÷��� ϵͳ�ͻ��ٴε���getCount()/getView()
		adapter.notifyDataSetChanged();
		
		
		//1.���б�ʹ�ñ���ͼ֮�� �������������������һ������:����ͼƬ������
		//android:cacheColorHint="#0FFF"
		//2.���б�ʹ�ñ���ͼ֮�� �������������������һ������:���ֺ�ɫ��
		//android:scrollingCache="false"
		//3.�������÷ָ�������ʽ��ʱ��
		//android:divider="#F00"
        //android:dividerHeight="2dp"
		//4.��������������ʱ�� ��/�±߳�����Ӱ
		//android:fadingEdge="none"
		//5.�����ʱ������ϵͳ������ɫ �����ȥ��
		//android:listSelector="#0000"
		
		
		//lv�Ĺ���������
		lv.setOnScrollListener(new OnScrollListener() {
			
			/**
			 * ������״̬�ı��ʱ����õ�
			 * scrollState ������״̬
			 * 		SCROLL_STATE_FLING	��ɨ
			 * 		SCROLL_STATE_IDLE	ʲô�������������
			 * 		SCROLL_STATE_TOUCH_SCROLL  ��ק
			 * */
			@Override
			public void onScrollStateChanged(AbsListView view, int scrollState) {
				switch (scrollState) {
					case OnScrollListener.SCROLL_STATE_FLING:
						Log.v("520it", "SCROLL_STATE_FLING");
						break;
					case OnScrollListener.SCROLL_STATE_IDLE:
						Log.v("520it", "SCROLL_STATE_IDLE");
						break;
					case OnScrollListener.SCROLL_STATE_TOUCH_SCROLL:
						Log.v("520it", "SCROLL_STATE_TOUCH_SCROLL");
						break;
				}
			}
			
			/**
			 *	������ʱ�򱻵���
			 *	ֻҪ�б���� �ͻ�ٵ��÷���
			 * */
			@Override
			public void onScroll(AbsListView view, int firstVisibleItem,
					int visibleItemCount, int totalItemCount) {
//				Log.v("520it", "onScroll  firstItem="+firstVisibleItem
//						+"   visibleCount="+visibleItemCount
//						+" totalCount="+totalItemCount);
			}
		});
		
		//lv�ĵ���¼�
		lv.setOnItemClickListener(new OnItemClickListener() {

			/**
			 * id ����BaseAdapter��getItemId ���ص�ֵ
			 * 
			 * */
			@Override
			public void onItemClick(AdapterView<?> parent, View view,
					int position, long id) {
				String data = (String) adapter.getItem(position);
				Toast.makeText(MainActivity.this, data, 0).show();
			}
		});
		
	}


}
