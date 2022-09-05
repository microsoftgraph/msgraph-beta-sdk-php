<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcSupportedRegion extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The name for the supported region. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var CloudPcSupportedRegionStatus|null $regionStatus The status of the supported region. Possible values are: available, restricted, unavailable, unknownFutureValue. Read-only.
    */
    private ?CloudPcSupportedRegionStatus $regionStatus = null;
    
    /**
     * @var CloudPcManagementService|null $supportedSolution The supportedSolution property
    */
    private ?CloudPcManagementService $supportedSolution = null;
    
    /**
     * Instantiates a new CloudPcSupportedRegion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcSupportedRegion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcSupportedRegion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcSupportedRegion {
        return new CloudPcSupportedRegion();
    }

    /**
     * Gets the displayName property value. The name for the supported region. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'regionStatus' => function (ParseNode $n) use ($o) { $o->setRegionStatus($n->getEnumValue(CloudPcSupportedRegionStatus::class)); },
            'supportedSolution' => function (ParseNode $n) use ($o) { $o->setSupportedSolution($n->getEnumValue(CloudPcManagementService::class)); },
        ]);
    }

    /**
     * Gets the regionStatus property value. The status of the supported region. Possible values are: available, restricted, unavailable, unknownFutureValue. Read-only.
     * @return CloudPcSupportedRegionStatus|null
    */
    public function getRegionStatus(): ?CloudPcSupportedRegionStatus {
        return $this->regionStatus;
    }

    /**
     * Gets the supportedSolution property value. The supportedSolution property
     * @return CloudPcManagementService|null
    */
    public function getSupportedSolution(): ?CloudPcManagementService {
        return $this->supportedSolution;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('regionStatus', $this->regionStatus);
        $writer->writeEnumValue('supportedSolution', $this->supportedSolution);
    }

    /**
     * Sets the displayName property value. The name for the supported region. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the regionStatus property value. The status of the supported region. Possible values are: available, restricted, unavailable, unknownFutureValue. Read-only.
     *  @param CloudPcSupportedRegionStatus|null $value Value to set for the regionStatus property.
    */
    public function setRegionStatus(?CloudPcSupportedRegionStatus $value ): void {
        $this->regionStatus = $value;
    }

    /**
     * Sets the supportedSolution property value. The supportedSolution property
     *  @param CloudPcManagementService|null $value Value to set for the supportedSolution property.
    */
    public function setSupportedSolution(?CloudPcManagementService $value ): void {
        $this->supportedSolution = $value;
    }

}
