package com.m520it.sqlite3;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.provider.BaseColumns;
import android.util.Log;

public class DbOpenHelper extends SQLiteOpenHelper implements BaseColumns{

	//1.���ݿ��ļ���
	public static final String DB_NAME="contact.db";
	//2.���ݿ�汾
	public static final int DB_VERSION=1;
	//3.���ݿ�������
	public static final String TABLE_NAME="contactinfo";
	public static final String _USERNAME="username";
	public static final String _PHONE="phone";
	
	//factory ���������α����Ĺ�����
	public DbOpenHelper(Context context) {
		super(context, DB_NAME, null, DB_VERSION);
	}

	@Override
//	����:
//		�����ݿ��ļ�������ʱ������onCreate() ����������������洴���������ݿ����
	public void onCreate(SQLiteDatabase db) {
		Log.v("520it", "onCreate");
//		�������������ݿ�����Ҫʹ��sql���
		db.execSQL("create table "+TABLE_NAME+" ("+_ID+" integer primary key autoincrement," +
				_USERNAME+" text,"+_PHONE+" text);");
	}

	@Override
//	Update �������ݿ�   �����ڸ÷�������ɾ��/���/�޸����ݿ�� 
	public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
		Log.v("520it", "onUpgrade"+"  oldVersion="
					+oldVersion+" newVersion="+newVersion);
	}

}
