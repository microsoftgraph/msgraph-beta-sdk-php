<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtectionAppLearningSummary extends Entity implements Parsable 
{
    /**
     * @var string|null $applicationName Application Name
    */
    private ?string $applicationName = null;
    
    /**
     * @var ApplicationType|null $applicationType Application Type. Possible values are: universal, desktop.
    */
    private ?ApplicationType $applicationType = null;
    
    /**
     * @var int|null $deviceCount Device Count
    */
    private ?int $deviceCount = null;
    
    /**
     * Instantiates a new windowsInformationProtectionAppLearningSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionAppLearningSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionAppLearningSummary {
        return new WindowsInformationProtectionAppLearningSummary();
    }

    /**
     * Gets the applicationName property value. Application Name
     * @return string|null
    */
    public function getApplicationName(): ?string {
        return $this->applicationName;
    }

    /**
     * Gets the applicationType property value. Application Type. Possible values are: universal, desktop.
     * @return ApplicationType|null
    */
    public function getApplicationType(): ?ApplicationType {
        return $this->applicationType;
    }

    /**
     * Gets the deviceCount property value. Device Count
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        return $this->deviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationName' => function (ParseNode $n) use ($o) { $o->setApplicationName($n->getStringValue()); },
            'applicationType' => function (ParseNode $n) use ($o) { $o->setApplicationType($n->getEnumValue(ApplicationType::class)); },
            'deviceCount' => function (ParseNode $n) use ($o) { $o->setDeviceCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationName', $this->applicationName);
        $writer->writeEnumValue('applicationType', $this->applicationType);
        $writer->writeIntegerValue('deviceCount', $this->deviceCount);
    }

    /**
     * Sets the applicationName property value. Application Name
     *  @param string|null $value Value to set for the applicationName property.
    */
    public function setApplicationName(?string $value ): void {
        $this->applicationName = $value;
    }

    /**
     * Sets the applicationType property value. Application Type. Possible values are: universal, desktop.
     *  @param ApplicationType|null $value Value to set for the applicationType property.
    */
    public function setApplicationType(?ApplicationType $value ): void {
        $this->applicationType = $value;
    }

    /**
     * Sets the deviceCount property value. Device Count
     *  @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value ): void {
        $this->deviceCount = $value;
    }

}