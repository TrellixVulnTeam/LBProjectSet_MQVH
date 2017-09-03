package com.m520it.sqlite3;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;

/**
 *	ʵ����ɾ���
 */
public class ContactDao {
	
	private DbOpenHelper mHelper;
	
	public ContactDao(Context c) {
		mHelper=new DbOpenHelper(c);
	}

	/**
	 * ����һ����ϵ����Ϣ
	 * @param username
	 * @param phone
	 */
	public boolean insertContact(String username,String phone){
		SQLiteDatabase db = mHelper.getWritableDatabase();
		// _id username phone
		//nullColumnHack ���� ����username ��ô�����ʱ�� username�Ͳ���Ϊnull
		//���nullColumnHack����Ϊnull  ��ô�˴β�����ֶο�������ĳЩ�ֶβ�����
		//ContentValues ��ֵ�� Դ��������ֻ�Ǽ򵥵�ά����һ��HashMap
		ContentValues values=new ContentValues();
		//key ��������ݿ����ֶ���  value����Ҫ�����ֵ
		values.put(DbOpenHelper._USERNAME, username);
		values.put(DbOpenHelper._PHONE, phone);
		//@return �²�����е�id �����-1��˵������ʧ��
		long rowId = db.insert(DbOpenHelper.TABLE_NAME, null , values);
		return rowId!=-1;
	}
	
	public boolean updateContact(String username,String newPhone){
		SQLiteDatabase db = mHelper.getWritableDatabase();
		ContentValues values=new ContentValues();
		values.put(DbOpenHelper._PHONE, newPhone);
		//whereClause  where���
		//whereArgs where���İ�ֵ
		//@return int �����˼��оͷ��ض���
		int updateRows = db.update(DbOpenHelper.TABLE_NAME,
				values, DbOpenHelper._USERNAME+"=?", new String[]{username});
		return updateRows>0;
	}
	
	public boolean deleteContact(String username){
		SQLiteDatabase db = mHelper.getWritableDatabase();
		//whereClause  where���
		//whereArgs where���İ�ֵ
		int deleteRows = db.delete(DbOpenHelper.TABLE_NAME, "username=?", new String[]{username});
		return deleteRows>0;
	}
	
	public String queryContact(String searchPhone){
		
		String result="";
		
		SQLiteDatabase db = mHelper.getReadableDatabase();
//		columns String[] ���ص���
		Cursor cursor = db.query(DbOpenHelper.TABLE_NAME, 
				new String[]{DbOpenHelper._USERNAME,DbOpenHelper._PHONE},
				"phone=?", new String[]{searchPhone}, 
				null, null, null);
		while (cursor.moveToNext()) {
			//����һ���е����� ����һ���е�����
			int columnIndex = cursor.getColumnIndex(DbOpenHelper._USERNAME);
			//����һ���е����� ���ظ����� ĳһ�е�ֵ
			String username = cursor.getString(columnIndex);
			
			//����һ���е����� ����һ���е�����
			int phoneColumnIndex = cursor.getColumnIndex(DbOpenHelper._PHONE);
			//����һ���е����� ���ظ����� ĳһ�е�ֵ
			String phone = cursor.getString(phoneColumnIndex);
			
			result+=(username+"  "+phone+" \n");
		}
		return result;
	}
	
	
}
