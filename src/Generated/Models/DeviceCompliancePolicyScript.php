<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class DeviceCompliancePolicyScript implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $deviceComplianceScriptId Device compliance script Id.
    */
    private ?string $deviceComplianceScriptId = null;
    
    /**
     * @var StreamInterface|null $rulesContent Json of the rules.
    */
    private ?StreamInterface $rulesContent = null;
    
    /**
     * Instantiates a new deviceCompliancePolicyScript and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceCompliancePolicyScript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceCompliancePolicyScript {
        return new DeviceCompliancePolicyScript();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceComplianceScriptId property value. Device compliance script Id.
     * @return string|null
    */
    public function getDeviceComplianceScriptId(): ?string {
        return $this->deviceComplianceScriptId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceComplianceScriptId' => function (ParseNode $n) use ($o) { $o->setDeviceComplianceScriptId($n->getStringValue()); },
            'rulesContent' => function (ParseNode $n) use ($o) { $o->setRulesContent($n->getBinaryContent()); },
        ];
    }

    /**
     * Gets the rulesContent property value. Json of the rules.
     * @return StreamInterface|null
    */
    public function getRulesContent(): ?StreamInterface {
        return $this->rulesContent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceComplianceScriptId', $this->deviceComplianceScriptId);
        $writer->writeBinaryContent('rulesContent', $this->rulesContent);
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
     * Sets the deviceComplianceScriptId property value. Device compliance script Id.
     *  @param string|null $value Value to set for the deviceComplianceScriptId property.
    */
    public function setDeviceComplianceScriptId(?string $value ): void {
        $this->deviceComplianceScriptId = $value;
    }

    /**
     * Sets the rulesContent property value. Json of the rules.
     *  @param StreamInterface|null $value Value to set for the rulesContent property.
    */
    public function setRulesContent(?StreamInterface $value ): void {
        $this->rulesContent = $value;
    }

}
