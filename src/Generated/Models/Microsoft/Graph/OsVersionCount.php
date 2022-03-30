<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OsVersionCount implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $deviceCount Count of devices with malware for the OS version */
    private ?int $deviceCount = null;
    
    /** @var DateTime|null $lastUpdateDateTime The Timestamp of the last update for the device count in UTC */
    private ?DateTime $lastUpdateDateTime = null;
    
    /** @var string|null $osVersion OS version */
    private ?string $osVersion = null;
    
    /**
     * Instantiates a new osVersionCount and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OsVersionCount
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OsVersionCount {
        return new OsVersionCount();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceCount property value. Count of devices with malware for the OS version
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
        return  [
            'deviceCount' => function (self $o, ParseNode $n) { $o->setDeviceCount($n->getIntegerValue()); },
            'lastUpdateDateTime' => function (self $o, ParseNode $n) { $o->setLastUpdateDateTime($n->getDateTimeValue()); },
            'osVersion' => function (self $o, ParseNode $n) { $o->setOsVersion($n->getStringValue()); },
        ];
    }

    /**
     * Gets the lastUpdateDateTime property value. The Timestamp of the last update for the device count in UTC
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        return $this->lastUpdateDateTime;
    }

    /**
     * Gets the osVersion property value. OS version
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('deviceCount', $this->deviceCount);
        $writer->writeDateTimeValue('lastUpdateDateTime', $this->lastUpdateDateTime);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deviceCount property value. Count of devices with malware for the OS version
     *  @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value ): void {
        $this->deviceCount = $value;
    }

    /**
     * Sets the lastUpdateDateTime property value. The Timestamp of the last update for the device count in UTC
     *  @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value ): void {
        $this->lastUpdateDateTime = $value;
    }

    /**
     * Sets the osVersion property value. OS version
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

}
