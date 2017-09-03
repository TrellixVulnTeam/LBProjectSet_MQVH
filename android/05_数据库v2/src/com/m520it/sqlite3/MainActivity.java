package com.m520it.sqlite3;

import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.Toast;

public class MainActivity extends Activity {
	
	private ContactDao mDao;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		try {
			// 1.������һ���ļ�����
			File file = new File(getFilesDir(), "haha.txt");
			// 2.1 ������һ�����ļ�
			file.createNewFile();
			// 2.2 ����һ�������
			FileOutputStream fos = new FileOutputStream(file);
			// 3.�����ȥ����һ�����ݿ��ļ� SQLiteOpenHelper ����һ��������
			DbOpenHelper helper = new DbOpenHelper(this);
			// 4.1 getReadableDatabase �������ݿ��ļ�
			// helper.getReadableDatabase();
			// 4.2 getWritableDatabase() �������ݿ��ļ�
			// SQLiteDatabase db = helper.getWritableDatabase();
			// db.execSQL(sql)
		} catch (IOException e) {
			e.printStackTrace();
		}
		
		mDao=new ContactDao(this);
	}

	public void insertContact(View v) {
		boolean ifInserted = mDao.insertContact("lisi", "150122222");
		Toast.makeText(this, ifInserted?"����ɹ�":"����ʧ��", 0).show();
	}

	public void updateContact(View v) {
		boolean updateContact = mDao.updateContact("zhangsan", "10086");
		Toast.makeText(this, updateContact?"���³ɹ�":"����ʧ��", 0).show();
	}

	public void deleteContact(View v) {
		boolean deleteContact = mDao.deleteContact("zhangsan");
		Toast.makeText(this, deleteContact?"ɾ���ɹ�":"ɾ��ʧ��", 0).show();
	}

	public void queryContact(View v) {
		String result = mDao.queryContact("150122222");
		Toast.makeText(this, result, 0).show();
	}

}
