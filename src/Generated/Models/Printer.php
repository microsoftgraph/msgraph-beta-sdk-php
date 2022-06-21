<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Printer extends PrinterBase implements Parsable 
{
    /**
     * @var bool|null $acceptingJobs The acceptingJobs property
    */
    private ?bool $acceptingJobs = null;
    
    /**
     * @var array<PrintConnector>|null $connectors The connectors that are associated with the printer.
    */
    private ?array $connectors = null;
    
    /**
     * @var bool|null $hasPhysicalDevice True if the printer has a physical device for printing. Read-only.
    */
    private ?bool $hasPhysicalDevice = null;
    
    /**
     * @var bool|null $isShared True if the printer is shared; false otherwise. Read-only.
    */
    private ?bool $isShared = null;
    
    /**
     * @var DateTime|null $lastSeenDateTime The most recent dateTimeOffset when a printer interacted with Universal Print. Read-only.
    */
    private ?DateTime $lastSeenDateTime = null;
    
    /**
     * @var DateTime|null $registeredDateTime The DateTimeOffset when the printer was registered. Read-only.
    */
    private ?DateTime $registeredDateTime = null;
    
    /**
     * @var PrinterShare|null $share The share property
    */
    private ?PrinterShare $share = null;
    
    /**
     * @var array<PrinterShare>|null $shares The list of printerShares that are associated with the printer. Currently, only one printerShare can be associated with the printer. Read-only. Nullable.
    */
    private ?array $shares = null;
    
    /**
     * @var array<PrintTaskTrigger>|null $taskTriggers A list of task triggers that are associated with the printer.
    */
    private ?array $taskTriggers = null;
    
    /**
     * Instantiates a new printer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Printer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Printer {
        return new Printer();
    }

    /**
     * Gets the acceptingJobs property value. The acceptingJobs property
     * @return bool|null
    */
    public function getAcceptingJobs(): ?bool {
        return $this->acceptingJobs;
    }

    /**
     * Gets the connectors property value. The connectors that are associated with the printer.
     * @return array<PrintConnector>|null
    */
    public function getConnectors(): ?array {
        return $this->connectors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptingJobs' => function (ParseNode $n) use ($o) { $o->setAcceptingJobs($n->getBooleanValue()); },
            'connectors' => function (ParseNode $n) use ($o) { $o->setConnectors($n->getCollectionOfObjectValues(array(PrintConnector::class, 'createFromDiscriminatorValue'))); },
            'hasPhysicalDevice' => function (ParseNode $n) use ($o) { $o->setHasPhysicalDevice($n->getBooleanValue()); },
            'isShared' => function (ParseNode $n) use ($o) { $o->setIsShared($n->getBooleanValue()); },
            'lastSeenDateTime' => function (ParseNode $n) use ($o) { $o->setLastSeenDateTime($n->getDateTimeValue()); },
            'registeredDateTime' => function (ParseNode $n) use ($o) { $o->setRegisteredDateTime($n->getDateTimeValue()); },
            'share' => function (ParseNode $n) use ($o) { $o->setShare($n->getObjectValue(array(PrinterShare::class, 'createFromDiscriminatorValue'))); },
            'shares' => function (ParseNode $n) use ($o) { $o->setShares($n->getCollectionOfObjectValues(array(PrinterShare::class, 'createFromDiscriminatorValue'))); },
            'taskTriggers' => function (ParseNode $n) use ($o) { $o->setTaskTriggers($n->getCollectionOfObjectValues(array(PrintTaskTrigger::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the hasPhysicalDevice property value. True if the printer has a physical device for printing. Read-only.
     * @return bool|null
    */
    public function getHasPhysicalDevice(): ?bool {
        return $this->hasPhysicalDevice;
    }

    /**
     * Gets the isShared property value. True if the printer is shared; false otherwise. Read-only.
     * @return bool|null
    */
    public function getIsShared(): ?bool {
        return $this->isShared;
    }

    /**
     * Gets the lastSeenDateTime property value. The most recent dateTimeOffset when a printer interacted with Universal Print. Read-only.
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->lastSeenDateTime;
    }

    /**
     * Gets the registeredDateTime property value. The DateTimeOffset when the printer was registered. Read-only.
     * @return DateTime|null
    */
    public function getRegisteredDateTime(): ?DateTime {
        return $this->registeredDateTime;
    }

    /**
     * Gets the share property value. The share property
     * @return PrinterShare|null
    */
    public function getShare(): ?PrinterShare {
        return $this->share;
    }

    /**
     * Gets the shares property value. The list of printerShares that are associated with the printer. Currently, only one printerShare can be associated with the printer. Read-only. Nullable.
     * @return array<PrinterShare>|null
    */
    public function getShares(): ?array {
        return $this->shares;
    }

    /**
     * Gets the taskTriggers property value. A list of task triggers that are associated with the printer.
     * @return array<PrintTaskTrigger>|null
    */
    public function getTaskTriggers(): ?array {
        return $this->taskTriggers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('acceptingJobs', $this->acceptingJobs);
        $writer->writeCollectionOfObjectValues('connectors', $this->connectors);
        $writer->writeBooleanValue('hasPhysicalDevice', $this->hasPhysicalDevice);
        $writer->writeBooleanValue('isShared', $this->isShared);
        $writer->writeDateTimeValue('lastSeenDateTime', $this->lastSeenDateTime);
        $writer->writeDateTimeValue('registeredDateTime', $this->registeredDateTime);
        $writer->writeObjectValue('share', $this->share);
        $writer->writeCollectionOfObjectValues('shares', $this->shares);
        $writer->writeCollectionOfObjectValues('taskTriggers', $this->taskTriggers);
    }

    /**
     * Sets the acceptingJobs property value. The acceptingJobs property
     *  @param bool|null $value Value to set for the acceptingJobs property.
    */
    public function setAcceptingJobs(?bool $value ): void {
        $this->acceptingJobs = $value;
    }

    /**
     * Sets the connectors property value. The connectors that are associated with the printer.
     *  @param array<PrintConnector>|null $value Value to set for the connectors property.
    */
    public function setConnectors(?array $value ): void {
        $this->connectors = $value;
    }

    /**
     * Sets the hasPhysicalDevice property value. True if the printer has a physical device for printing. Read-only.
     *  @param bool|null $value Value to set for the hasPhysicalDevice property.
    */
    public function setHasPhysicalDevice(?bool $value ): void {
        $this->hasPhysicalDevice = $value;
    }

    /**
     * Sets the isShared property value. True if the printer is shared; false otherwise. Read-only.
     *  @param bool|null $value Value to set for the isShared property.
    */
    public function setIsShared(?bool $value ): void {
        $this->isShared = $value;
    }

    /**
     * Sets the lastSeenDateTime property value. The most recent dateTimeOffset when a printer interacted with Universal Print. Read-only.
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value ): void {
        $this->lastSeenDateTime = $value;
    }

    /**
     * Sets the registeredDateTime property value. The DateTimeOffset when the printer was registered. Read-only.
     *  @param DateTime|null $value Value to set for the registeredDateTime property.
    */
    public function setRegisteredDateTime(?DateTime $value ): void {
        $this->registeredDateTime = $value;
    }

    /**
     * Sets the share property value. The share property
     *  @param PrinterShare|null $value Value to set for the share property.
    */
    public function setShare(?PrinterShare $value ): void {
        $this->share = $value;
    }

    /**
     * Sets the shares property value. The list of printerShares that are associated with the printer. Currently, only one printerShare can be associated with the printer. Read-only. Nullable.
     *  @param array<PrinterShare>|null $value Value to set for the shares property.
    */
    public function setShares(?array $value ): void {
        $this->shares = $value;
    }

    /**
     * Sets the taskTriggers property value. A list of task triggers that are associated with the printer.
     *  @param array<PrintTaskTrigger>|null $value Value to set for the taskTriggers property.
    */
    public function setTaskTriggers(?array $value ): void {
        $this->taskTriggers = $value;
    }

}
