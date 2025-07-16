<?php

// Parent class - Abstract class untuk semua peralatan IT
abstract class PeralatanIT
{
  public function __construct(
    public string $id,
    public string $brand,
    public string $model,
    public string $tanggalBeli
  ) {}

  // Abstract methods yang harus diimplementasikan oleh child class
  abstract public function performMaintenance();
  abstract public function getMaintenanceSchedule();
  abstract public function getMaintenanceCost();

  // Common method untuk semua peralatan
  public function getInfo()
  {
    return "ID: {$this->id} | Brand: {$this->brand} | Model: {$this->model} | Tanggal Beli: {$this->tanggalBeli}";
  }
}

// Interface untuk maintenance
interface IMaintenance
{
  public function performMaintenance();
  public function getMaintenanceSchedule();
  public function getMaintenanceCost();
}

// Trait untuk fitur umum
trait StatusMaintenance
{
  public string $status = 'Good';

  public function setStatus(string $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}

// Child class - Laptop
class Laptop extends PeralatanIT implements IMaintenance
{
  use StatusMaintenance;

  public function __construct(
    public string $id, 
    public string $brand, 
    public string $model, 
    public string $tanggalBeli,
    public string $storageType,
    public int $batteryHealth = 100
  ) {
    parent::__construct($id, $brand, $model, $tanggalBeli);
  }

  public function performMaintenance()
  {
    $this->setStatus('Maintained');
    $this->batteryHealth = min(100, $this->batteryHealth + 10);
    return "Laptop maintenance selesai. Battery health: {$this->batteryHealth}%";
  }

  public function getMaintenanceSchedule()
  {
    return "Setiap 6 bulan";
  }

  public function getMaintenanceCost()
  {
    return 150000;
  }

  // Method spesifik laptop
  public function checkBattery()
  {
    return "Battery health: {$this->batteryHealth}%";
  }

  public function getStorageInfo()
  {
    return "Storage type: {$this->storageType}";
  }
}

// Child class - PC
class PC extends PeralatanIT implements IMaintenance
{
  use StatusMaintenance;

  public function __construct(
    public string $id, 
    public string $brand, 
    public string $model, 
    public string $tanggalBeli,
    public string $processor,
    public string $graphics
  ) {
    parent::__construct($id, $brand, $model, $tanggalBeli);
  }

  public function performMaintenance()
  {
    $this->setStatus('Maintained');
    return "PC maintenance selesai. Processor: {$this->processor}, Graphics: {$this->graphics}";
  }

  public function getMaintenanceSchedule()
  {
    return "Setiap 12 bulan";
  }

  public function getMaintenanceCost()
  {
    return 200000;
  }

  // Method spesifik PC
  public function getSpecs()
  {
    return "Processor: {$this->processor} | Graphics: {$this->graphics}";
  }
}

// Child class - Printer
class Printer extends PeralatanIT implements IMaintenance
{
  use StatusMaintenance;

  public function __construct(
    public string $id, 
    public string $brand, 
    public string $model, 
    public string $tanggalBeli,
    public string $printerType,
    public int $inkLevel = 100
  ) {
    parent::__construct($id, $brand, $model, $tanggalBeli);
  }

  public function performMaintenance()
  {
    $this->setStatus('Maintained');
    $this->inkLevel = 100;
    return "Printer maintenance selesai. Ink level: {$this->inkLevel}%";
  }

  public function getMaintenanceSchedule()
  {
    return "Setiap 3 bulan";
  }

  public function getMaintenanceCost()
  {
    return 100000;
  }

  // Method spesifik printer
  public function checkInk()
  {
    return "Ink level: {$this->inkLevel}%";
  }

  public function getPrinterType()
  {
    return "Type: {$this->printerType}";
  }
}

// ==========================================
// DEMO PENGGUNAAN
// ==========================================

echo "==========================================\n";
echo "SISTEM PEMELIHARAAN BARANG IT - DEMO OOP\n";
echo "Implementasi Inheritance dan Abstraction\n";
echo "==========================================\n\n";

// 1. Membuat peralatan IT
echo "1. MEMBUAT PERALATAN IT:\n";
echo "------------------------\n";

$laptop = new Laptop('LAP001', 'Dell', 'Latitude 5520', '2023-01-15', 'SSD');
$pc = new PC('PC001', 'HP', 'ProDesk 600', '2023-03-20', 'Intel i7', 'Integrated');
$printer = new Printer('PRN001', 'Canon', 'Pixma MG2570', '2023-02-10', 'Inkjet');

echo "✅ Berhasil membuat 3 peralatan IT:\n";
echo "   • {$laptop->getInfo()}\n";
echo "   • {$pc->getInfo()}\n";
echo "   • {$printer->getInfo()}\n\n";

// 2. Demonstrasi Inheritance
echo "2. DEMONSTRASI INHERITANCE (Pewarisan):\n";
echo "----------------------------------------\n";
echo "Semua peralatan mewarisi method getInfo() dari parent class PeralatanIT:\n\n";

$peralatanList = [$laptop, $pc, $printer];

foreach ($peralatanList as $peralatan) {
    echo "{$peralatan->getInfo()} | Status: {$peralatan->getStatus()}\n";
}
echo "\n";

// 3. Demonstrasi Abstraction
echo "3. DEMONSTRASI ABSTRACTION (Abstraksi):\n";
echo "----------------------------------------\n";
echo "Method performMaintenance() diimplementasikan berbeda untuk setiap jenis peralatan:\n\n";

foreach ($peralatanList as $peralatan) {
    $maintenanceResult = $peralatan->performMaintenance();
    $schedule = $peralatan->getMaintenanceSchedule();
    $cost = number_format($peralatan->getMaintenanceCost());
    
    echo "Equipment: {$peralatan->brand} {$peralatan->model}\n";
    echo "Result: {$maintenanceResult}\n";
    echo "Schedule: {$schedule}\n";
    echo "Cost: Rp {$cost}\n";
    echo "---\n";
}
echo "\n";

// 4. Method spesifik
echo "4. METHOD SPESIFIK SETIAP PERALATAN:\n";
echo "------------------------------------\n";
echo "Laptop: {$laptop->checkBattery()} | {$laptop->getStorageInfo()}\n";
echo "PC: {$pc->getSpecs()}\n";
echo "Printer: {$printer->checkInk()} | {$printer->getPrinterType()}\n\n";

// // 5. Ringkasan
// echo "5. RINGKASAN IMPLEMENTASI OOP:\n";
// echo "------------------------------\n";
// echo "🔹 INHERITANCE (Pewarisan):\n";
// echo "   • Laptop, PC, Printer extends PeralatanIT\n";
// echo "   • Semua peralatan mewarisi properti dan method dari parent class\n";
// echo "   • Code reuse - tidak perlu menulis ulang method yang sama\n\n";

// echo "🔹 ABSTRACTION (Abstraksi):\n";
// echo "   • Abstract class PeralatanIT tidak bisa diinstantiate langsung\n";
// echo "   • Abstract methods harus diimplementasikan oleh child class\n";
// echo "   • Interface IMaintenance mendefinisikan kontrak maintenance\n\n";

// echo "🔹 TRAIT:\n";
// echo "   • StatusMaintenance trait memberikan fitur status ke semua peralatan\n";
// echo "   • Reusable code untuk fitur yang sama\n\n";

// echo "6. KEUNTUNGAN IMPLEMENTASI INI:\n";
// echo "-------------------------------\n";
// echo "• Code Reuse: Method umum bisa digunakan semua peralatan\n";
// echo "• Consistency: Semua peralatan memiliki interface yang sama\n";
// echo "• Flexibility: Mudah menambah jenis peralatan baru\n";
// echo "• Maintainability: Perubahan di parent class otomatis berlaku ke semua child\n";
// echo "• Trait: Fitur umum bisa digunakan ulang\n\n";

// echo "==========================================\n";
// echo "DEMO SELESAI\n";
// echo "==========================================\n";

?> 