<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LicenseInfoDetail implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AzureADLicenseType|null $licenseType  */
    private ?AzureADLicenseType $licenseType = null;
    
    /** @var int|null $totalAssignedCount  */
    private ?int $totalAssignedCount = null;
    
    /** @var int|null $totalLicenseCount  */
    private ?int $totalLicenseCount = null;
    
    /** @var int|null $totalUsageCount  */
    private ?int $totalUsageCount = null;
    
    /**
     * Instantiates a new licenseInfoDetail and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LicenseInfoDetail
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): LicenseInfoDetail {
        return new LicenseInfoDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'licenseType' => function (self $o, ParseNode $n) { $o->setLicenseType($n->getEnumValue(AzureADLicenseType::class)); },
            'totalAssignedCount' => function (self $o, ParseNode $n) { $o->setTotalAssignedCount($n->getIntegerValue()); },
            'totalLicenseCount' => function (self $o, ParseNode $n) { $o->setTotalLicenseCount($n->getIntegerValue()); },
            'totalUsageCount' => function (self $o, ParseNode $n) { $o->setTotalUsageCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the licenseType property value. 
     * @return AzureADLicenseType|null
    */
    public function getLicenseType(): ?AzureADLicenseType {
        return $this->licenseType;
    }

    /**
     * Gets the totalAssignedCount property value. 
     * @return int|null
    */
    public function getTotalAssignedCount(): ?int {
        return $this->totalAssignedCount;
    }

    /**
     * Gets the totalLicenseCount property value. 
     * @return int|null
    */
    public function getTotalLicenseCount(): ?int {
        return $this->totalLicenseCount;
    }

    /**
     * Gets the totalUsageCount property value. 
     * @return int|null
    */
    public function getTotalUsageCount(): ?int {
        return $this->totalUsageCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('licenseType', $this->licenseType);
        $writer->writeIntegerValue('totalAssignedCount', $this->totalAssignedCount);
        $writer->writeIntegerValue('totalLicenseCount', $this->totalLicenseCount);
        $writer->writeIntegerValue('totalUsageCount', $this->totalUsageCount);
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
     * Sets the licenseType property value. 
     *  @param AzureADLicenseType|null $value Value to set for the licenseType property.
    */
    public function setLicenseType(?AzureADLicenseType $value ): void {
        $this->licenseType = $value;
    }

    /**
     * Sets the totalAssignedCount property value. 
     *  @param int|null $value Value to set for the totalAssignedCount property.
    */
    public function setTotalAssignedCount(?int $value ): void {
        $this->totalAssignedCount = $value;
    }

    /**
     * Sets the totalLicenseCount property value. 
     *  @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value ): void {
        $this->totalLicenseCount = $value;
    }

    /**
     * Sets the totalUsageCount property value. 
     *  @param int|null $value Value to set for the totalUsageCount property.
    */
    public function setTotalUsageCount(?int $value ): void {
        $this->totalUsageCount = $value;
    }

}
