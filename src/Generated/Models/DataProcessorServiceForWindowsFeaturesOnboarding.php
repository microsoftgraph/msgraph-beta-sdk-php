<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataProcessorServiceForWindowsFeaturesOnboarding implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $areDataProcessorServiceForWindowsFeaturesEnabled Indicates whether the tenant has enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. When TRUE, the tenant has enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. When FALSE, the tenant has not enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. Default value is FALSE.
    */
    private ?bool $areDataProcessorServiceForWindowsFeaturesEnabled = null;
    
    /**
     * @var bool|null $hasValidWindowsLicense Indicates whether the tenant has required Windows license. When TRUE, the tenant has the required Windows license. When FALSE, the tenant does not have the required Windows license. Default value is FALSE.
    */
    private ?bool $hasValidWindowsLicense = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new dataProcessorServiceForWindowsFeaturesOnboarding and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.dataProcessorServiceForWindowsFeaturesOnboarding');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataProcessorServiceForWindowsFeaturesOnboarding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataProcessorServiceForWindowsFeaturesOnboarding {
        return new DataProcessorServiceForWindowsFeaturesOnboarding();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the areDataProcessorServiceForWindowsFeaturesEnabled property value. Indicates whether the tenant has enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. When TRUE, the tenant has enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. When FALSE, the tenant has not enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. Default value is FALSE.
     * @return bool|null
    */
    public function getAreDataProcessorServiceForWindowsFeaturesEnabled(): ?bool {
        return $this->areDataProcessorServiceForWindowsFeaturesEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'areDataProcessorServiceForWindowsFeaturesEnabled' => fn(ParseNode $n) => $o->setAreDataProcessorServiceForWindowsFeaturesEnabled($n->getBooleanValue()),
            'hasValidWindowsLicense' => fn(ParseNode $n) => $o->setHasValidWindowsLicense($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the hasValidWindowsLicense property value. Indicates whether the tenant has required Windows license. When TRUE, the tenant has the required Windows license. When FALSE, the tenant does not have the required Windows license. Default value is FALSE.
     * @return bool|null
    */
    public function getHasValidWindowsLicense(): ?bool {
        return $this->hasValidWindowsLicense;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('areDataProcessorServiceForWindowsFeaturesEnabled', $this->areDataProcessorServiceForWindowsFeaturesEnabled);
        $writer->writeBooleanValue('hasValidWindowsLicense', $this->hasValidWindowsLicense);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the areDataProcessorServiceForWindowsFeaturesEnabled property value. Indicates whether the tenant has enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. When TRUE, the tenant has enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. When FALSE, the tenant has not enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. Default value is FALSE.
     *  @param bool|null $value Value to set for the areDataProcessorServiceForWindowsFeaturesEnabled property.
    */
    public function setAreDataProcessorServiceForWindowsFeaturesEnabled(?bool $value ): void {
        $this->areDataProcessorServiceForWindowsFeaturesEnabled = $value;
    }

    /**
     * Sets the hasValidWindowsLicense property value. Indicates whether the tenant has required Windows license. When TRUE, the tenant has the required Windows license. When FALSE, the tenant does not have the required Windows license. Default value is FALSE.
     *  @param bool|null $value Value to set for the hasValidWindowsLicense property.
    */
    public function setHasValidWindowsLicense(?bool $value ): void {
        $this->hasValidWindowsLicense = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
