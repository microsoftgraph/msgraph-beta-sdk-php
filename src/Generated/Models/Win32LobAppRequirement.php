<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppRequirement implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $detectionValue The detection value
    */
    private ?string $detectionValue = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var Win32LobAppDetectionOperator|null $operator Contains properties for detection operator.
    */
    private ?Win32LobAppDetectionOperator $operator = null;
    
    /**
     * Instantiates a new win32LobAppRequirement and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.win32LobAppRequirement');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppRequirement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppRequirement {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.win32LobAppFileSystemRequirement': return new Win32LobAppFileSystemRequirement();
                case '#microsoft.graph.win32LobAppPowerShellScriptRequirement': return new Win32LobAppPowerShellScriptRequirement();
                case '#microsoft.graph.win32LobAppRegistryRequirement': return new Win32LobAppRegistryRequirement();
            }
        }
        return new Win32LobAppRequirement();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the detectionValue property value. The detection value
     * @return string|null
    */
    public function getDetectionValue(): ?string {
        return $this->detectionValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'detectionValue' => fn(ParseNode $n) => $o->setDetectionValue($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(Win32LobAppDetectionOperator::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the operator property value. Contains properties for detection operator.
     * @return Win32LobAppDetectionOperator|null
    */
    public function getOperator(): ?Win32LobAppDetectionOperator {
        return $this->operator;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('detectionValue', $this->detectionValue);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('operator', $this->operator);
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
     * Sets the detectionValue property value. The detection value
     *  @param string|null $value Value to set for the detectionValue property.
    */
    public function setDetectionValue(?string $value ): void {
        $this->detectionValue = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the operator property value. Contains properties for detection operator.
     *  @param Win32LobAppDetectionOperator|null $value Value to set for the operator property.
    */
    public function setOperator(?Win32LobAppDetectionOperator $value ): void {
        $this->operator = $value;
    }

}
