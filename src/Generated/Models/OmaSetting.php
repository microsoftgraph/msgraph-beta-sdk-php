<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OmaSetting implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description Description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display Name.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isEncrypted Indicates whether the value field is encrypted. This property is read-only.
    */
    private ?bool $isEncrypted = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $omaUri OMA.
    */
    private ?string $omaUri = null;
    
    /**
     * @var string|null $secretReferenceValueId ReferenceId for looking up secret for decryption. This property is read-only.
    */
    private ?string $secretReferenceValueId = null;
    
    /**
     * Instantiates a new omaSetting and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.omaSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OmaSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OmaSetting {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.omaSettingBase64': return new OmaSettingBase64();
                case '#microsoft.graph.omaSettingBoolean': return new OmaSettingBoolean();
                case '#microsoft.graph.omaSettingDateTime': return new OmaSettingDateTime();
                case '#microsoft.graph.omaSettingFloatingPoint': return new OmaSettingFloatingPoint();
                case '#microsoft.graph.omaSettingInteger': return new OmaSettingInteger();
                case '#microsoft.graph.omaSettingString': return new OmaSettingString();
                case '#microsoft.graph.omaSettingStringXml': return new OmaSettingStringXml();
            }
        }
        return new OmaSetting();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display Name.
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
        return  [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isEncrypted' => function (ParseNode $n) use ($o) { $o->setIsEncrypted($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'omaUri' => function (ParseNode $n) use ($o) { $o->setOmaUri($n->getStringValue()); },
            'secretReferenceValueId' => function (ParseNode $n) use ($o) { $o->setSecretReferenceValueId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isEncrypted property value. Indicates whether the value field is encrypted. This property is read-only.
     * @return bool|null
    */
    public function getIsEncrypted(): ?bool {
        return $this->isEncrypted;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the omaUri property value. OMA.
     * @return string|null
    */
    public function getOmaUri(): ?string {
        return $this->omaUri;
    }

    /**
     * Gets the secretReferenceValueId property value. ReferenceId for looking up secret for decryption. This property is read-only.
     * @return string|null
    */
    public function getSecretReferenceValueId(): ?string {
        return $this->secretReferenceValueId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('omaUri', $this->omaUri);
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
     * Sets the description property value. Description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display Name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isEncrypted property value. Indicates whether the value field is encrypted. This property is read-only.
     *  @param bool|null $value Value to set for the isEncrypted property.
    */
    public function setIsEncrypted(?bool $value ): void {
        $this->isEncrypted = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the omaUri property value. OMA.
     *  @param string|null $value Value to set for the omaUri property.
    */
    public function setOmaUri(?string $value ): void {
        $this->omaUri = $value;
    }

    /**
     * Sets the secretReferenceValueId property value. ReferenceId for looking up secret for decryption. This property is read-only.
     *  @param string|null $value Value to set for the secretReferenceValueId property.
    */
    public function setSecretReferenceValueId(?string $value ): void {
        $this->secretReferenceValueId = $value;
    }

}
