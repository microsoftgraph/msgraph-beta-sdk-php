<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessDevices implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ConditionalAccessFilter|null $deviceFilter Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them. Cannot be set if includeDevices or excludeDevices is set.
    */
    private ?ConditionalAccessFilter $deviceFilter = null;
    
    /**
     * @var array<string>|null $excludeDevices States excluded from the scope of the policy. Possible values: Compliant, DomainJoined. Cannot be set if deviceFIlter is set.
    */
    private ?array $excludeDevices = null;
    
    /**
     * @var array<string>|null $excludeDeviceStates The excludeDeviceStates property
    */
    private ?array $excludeDeviceStates = null;
    
    /**
     * @var array<string>|null $includeDevices States in the scope of the policy. All is the only allowed value. Cannot be set if deviceFIlter is set.
    */
    private ?array $includeDevices = null;
    
    /**
     * @var array<string>|null $includeDeviceStates The includeDeviceStates property
    */
    private ?array $includeDeviceStates = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new conditionalAccessDevices and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessDevices');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessDevices
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessDevices {
        return new ConditionalAccessDevices();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceFilter property value. Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them. Cannot be set if includeDevices or excludeDevices is set.
     * @return ConditionalAccessFilter|null
    */
    public function getDeviceFilter(): ?ConditionalAccessFilter {
        return $this->deviceFilter;
    }

    /**
     * Gets the excludeDevices property value. States excluded from the scope of the policy. Possible values: Compliant, DomainJoined. Cannot be set if deviceFIlter is set.
     * @return array<string>|null
    */
    public function getExcludeDevices(): ?array {
        return $this->excludeDevices;
    }

    /**
     * Gets the excludeDeviceStates property value. The excludeDeviceStates property
     * @return array<string>|null
    */
    public function getExcludeDeviceStates(): ?array {
        return $this->excludeDeviceStates;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceFilter' => fn(ParseNode $n) => $o->setDeviceFilter($n->getObjectValue([ConditionalAccessFilter::class, 'createFromDiscriminatorValue'])),
            'excludeDevices' => fn(ParseNode $n) => $o->setExcludeDevices($n->getCollectionOfPrimitiveValues()),
            'excludeDeviceStates' => fn(ParseNode $n) => $o->setExcludeDeviceStates($n->getCollectionOfPrimitiveValues()),
            'includeDevices' => fn(ParseNode $n) => $o->setIncludeDevices($n->getCollectionOfPrimitiveValues()),
            'includeDeviceStates' => fn(ParseNode $n) => $o->setIncludeDeviceStates($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the includeDevices property value. States in the scope of the policy. All is the only allowed value. Cannot be set if deviceFIlter is set.
     * @return array<string>|null
    */
    public function getIncludeDevices(): ?array {
        return $this->includeDevices;
    }

    /**
     * Gets the includeDeviceStates property value. The includeDeviceStates property
     * @return array<string>|null
    */
    public function getIncludeDeviceStates(): ?array {
        return $this->includeDeviceStates;
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
        $writer->writeObjectValue('deviceFilter', $this->deviceFilter);
        $writer->writeCollectionOfPrimitiveValues('excludeDevices', $this->excludeDevices);
        $writer->writeCollectionOfPrimitiveValues('excludeDeviceStates', $this->excludeDeviceStates);
        $writer->writeCollectionOfPrimitiveValues('includeDevices', $this->includeDevices);
        $writer->writeCollectionOfPrimitiveValues('includeDeviceStates', $this->includeDeviceStates);
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
     * Sets the deviceFilter property value. Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them. Cannot be set if includeDevices or excludeDevices is set.
     *  @param ConditionalAccessFilter|null $value Value to set for the deviceFilter property.
    */
    public function setDeviceFilter(?ConditionalAccessFilter $value ): void {
        $this->deviceFilter = $value;
    }

    /**
     * Sets the excludeDevices property value. States excluded from the scope of the policy. Possible values: Compliant, DomainJoined. Cannot be set if deviceFIlter is set.
     *  @param array<string>|null $value Value to set for the excludeDevices property.
    */
    public function setExcludeDevices(?array $value ): void {
        $this->excludeDevices = $value;
    }

    /**
     * Sets the excludeDeviceStates property value. The excludeDeviceStates property
     *  @param array<string>|null $value Value to set for the excludeDeviceStates property.
    */
    public function setExcludeDeviceStates(?array $value ): void {
        $this->excludeDeviceStates = $value;
    }

    /**
     * Sets the includeDevices property value. States in the scope of the policy. All is the only allowed value. Cannot be set if deviceFIlter is set.
     *  @param array<string>|null $value Value to set for the includeDevices property.
    */
    public function setIncludeDevices(?array $value ): void {
        $this->includeDevices = $value;
    }

    /**
     * Sets the includeDeviceStates property value. The includeDeviceStates property
     *  @param array<string>|null $value Value to set for the includeDeviceStates property.
    */
    public function setIncludeDeviceStates(?array $value ): void {
        $this->includeDeviceStates = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
