@echo "����log"
adb pull /sdcard/monkey_system.log monkey_logs/monkey_system.log

@echo "ץ��mtklog" 
adb pull /mnt/sdcard2/mtklog mtklog 

@echo "ץ��trace" 
adb pull /data/anr mtklog/anr 

@echo "ץ��data aee db" 
adb pull /data/aee_exp mtklog/data_aee_exp 

@echo "ץ��data mobilelog" 
adb pull /data/mobilelog mtklog/data_mobilelog 

@echo "ץ��NE core" 
adb pull /data/core mtklog/data_core 

@echo "ץ��tombstones" 
adb pull /data/tombstones mtklog/tombstones 

@echo "���" 

pause 