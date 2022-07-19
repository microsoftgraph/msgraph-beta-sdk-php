<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProcessEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var DetectionStatus|null $detectionStatus The detectionStatus property
    */
    private ?DetectionStatus $detectionStatus = null;
    
    /**
     * @var FileDetails|null $imageFile The imageFile property
    */
    private ?FileDetails $imageFile = null;
    
    /**
     * @var string|null $mdeDeviceId The mdeDeviceId property
    */
    private ?string $mdeDeviceId = null;
    
    /**
     * @var DateTime|null $parentProcessCreationDateTime The parentProcessCreationDateTime property
    */
    private ?DateTime $parentProcessCreationDateTime = null;
    
    /**
     * @var int|null $parentProcessId The parentProcessId property
    */
    private ?int $parentProcessId = null;
    
    /**
     * @var FileDetails|null $parentProcessImageFile The parentProcessImageFile property
    */
    private ?FileDetails $parentProcessImageFile = null;
    
    /**
     * @var string|null $processCommandLine The processCommandLine property
    */
    private ?string $processCommandLine = null;
    
    /**
     * @var DateTime|null $processCreationDateTime The processCreationDateTime property
    */
    private ?DateTime $processCreationDateTime = null;
    
    /**
     * @var int|null $processId The processId property
    */
    private ?int $processId = null;
    
    /**
     * @var UserAccount|null $userAccount The userAccount property
    */
    private ?UserAccount $userAccount = null;
    
    /**
     * Instantiates a new ProcessEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.processEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProcessEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProcessEvidence {
        return new ProcessEvidence();
    }

    /**
     * Gets the detectionStatus property value. The detectionStatus property
     * @return DetectionStatus|null
    */
    public function getDetectionStatus(): ?DetectionStatus {
        return $this->detectionStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detectionStatus' => function (ParseNode $n) use ($o) { $o->setDetectionStatus($n->getEnumValue(DetectionStatus::class)); },
            'imageFile' => function (ParseNode $n) use ($o) { $o->setImageFile($n->getObjectValue(array(FileDetails::class, 'createFromDiscriminatorValue'))); },
            'mdeDeviceId' => function (ParseNode $n) use ($o) { $o->setMdeDeviceId($n->getStringValue()); },
            'parentProcessCreationDateTime' => function (ParseNode $n) use ($o) { $o->setParentProcessCreationDateTime($n->getDateTimeValue()); },
            'parentProcessId' => function (ParseNode $n) use ($o) { $o->setParentProcessId($n->getIntegerValue()); },
            'parentProcessImageFile' => function (ParseNode $n) use ($o) { $o->setParentProcessImageFile($n->getObjectValue(array(FileDetails::class, 'createFromDiscriminatorValue'))); },
            'processCommandLine' => function (ParseNode $n) use ($o) { $o->setProcessCommandLine($n->getStringValue()); },
            'processCreationDateTime' => function (ParseNode $n) use ($o) { $o->setProcessCreationDateTime($n->getDateTimeValue()); },
            'processId' => function (ParseNode $n) use ($o) { $o->setProcessId($n->getIntegerValue()); },
            'userAccount' => function (ParseNode $n) use ($o) { $o->setUserAccount($n->getObjectValue(array(UserAccount::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the imageFile property value. The imageFile property
     * @return FileDetails|null
    */
    public function getImageFile(): ?FileDetails {
        return $this->imageFile;
    }

    /**
     * Gets the mdeDeviceId property value. The mdeDeviceId property
     * @return string|null
    */
    public function getMdeDeviceId(): ?string {
        return $this->mdeDeviceId;
    }

    /**
     * Gets the parentProcessCreationDateTime property value. The parentProcessCreationDateTime property
     * @return DateTime|null
    */
    public function getParentProcessCreationDateTime(): ?DateTime {
        return $this->parentProcessCreationDateTime;
    }

    /**
     * Gets the parentProcessId property value. The parentProcessId property
     * @return int|null
    */
    public function getParentProcessId(): ?int {
        return $this->parentProcessId;
    }

    /**
     * Gets the parentProcessImageFile property value. The parentProcessImageFile property
     * @return FileDetails|null
    */
    public function getParentProcessImageFile(): ?FileDetails {
        return $this->parentProcessImageFile;
    }

    /**
     * Gets the processCommandLine property value. The processCommandLine property
     * @return string|null
    */
    public function getProcessCommandLine(): ?string {
        return $this->processCommandLine;
    }

    /**
     * Gets the processCreationDateTime property value. The processCreationDateTime property
     * @return DateTime|null
    */
    public function getProcessCreationDateTime(): ?DateTime {
        return $this->processCreationDateTime;
    }

    /**
     * Gets the processId property value. The processId property
     * @return int|null
    */
    public function getProcessId(): ?int {
        return $this->processId;
    }

    /**
     * Gets the userAccount property value. The userAccount property
     * @return UserAccount|null
    */
    public function getUserAccount(): ?UserAccount {
        return $this->userAccount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('detectionStatus', $this->detectionStatus);
        $writer->writeObjectValue('imageFile', $this->imageFile);
        $writer->writeStringValue('mdeDeviceId', $this->mdeDeviceId);
        $writer->writeDateTimeValue('parentProcessCreationDateTime', $this->parentProcessCreationDateTime);
        $writer->writeIntegerValue('parentProcessId', $this->parentProcessId);
        $writer->writeObjectValue('parentProcessImageFile', $this->parentProcessImageFile);
        $writer->writeStringValue('processCommandLine', $this->processCommandLine);
        $writer->writeDateTimeValue('processCreationDateTime', $this->processCreationDateTime);
        $writer->writeIntegerValue('processId', $this->processId);
        $writer->writeObjectValue('userAccount', $this->userAccount);
    }

    /**
     * Sets the detectionStatus property value. The detectionStatus property
     *  @param DetectionStatus|null $value Value to set for the detectionStatus property.
    */
    public function setDetectionStatus(?DetectionStatus $value ): void {
        $this->detectionStatus = $value;
    }

    /**
     * Sets the imageFile property value. The imageFile property
     *  @param FileDetails|null $value Value to set for the imageFile property.
    */
    public function setImageFile(?FileDetails $value ): void {
        $this->imageFile = $value;
    }

    /**
     * Sets the mdeDeviceId property value. The mdeDeviceId property
     *  @param string|null $value Value to set for the mdeDeviceId property.
    */
    public function setMdeDeviceId(?string $value ): void {
        $this->mdeDeviceId = $value;
    }

    /**
     * Sets the parentProcessCreationDateTime property value. The parentProcessCreationDateTime property
     *  @param DateTime|null $value Value to set for the parentProcessCreationDateTime property.
    */
    public function setParentProcessCreationDateTime(?DateTime $value ): void {
        $this->parentProcessCreationDateTime = $value;
    }

    /**
     * Sets the parentProcessId property value. The parentProcessId property
     *  @param int|null $value Value to set for the parentProcessId property.
    */
    public function setParentProcessId(?int $value ): void {
        $this->parentProcessId = $value;
    }

    /**
     * Sets the parentProcessImageFile property value. The parentProcessImageFile property
     *  @param FileDetails|null $value Value to set for the parentProcessImageFile property.
    */
    public function setParentProcessImageFile(?FileDetails $value ): void {
        $this->parentProcessImageFile = $value;
    }

    /**
     * Sets the processCommandLine property value. The processCommandLine property
     *  @param string|null $value Value to set for the processCommandLine property.
    */
    public function setProcessCommandLine(?string $value ): void {
        $this->processCommandLine = $value;
    }

    /**
     * Sets the processCreationDateTime property value. The processCreationDateTime property
     *  @param DateTime|null $value Value to set for the processCreationDateTime property.
    */
    public function setProcessCreationDateTime(?DateTime $value ): void {
        $this->processCreationDateTime = $value;
    }

    /**
     * Sets the processId property value. The processId property
     *  @param int|null $value Value to set for the processId property.
    */
    public function setProcessId(?int $value ): void {
        $this->processId = $value;
    }

    /**
     * Sets the userAccount property value. The userAccount property
     *  @param UserAccount|null $value Value to set for the userAccount property.
    */
    public function setUserAccount(?UserAccount $value ): void {
        $this->userAccount = $value;
    }

}
