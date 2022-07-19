<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Acl implements AdditionalDataHolder, Parsable 
{
    /**
     * @var AccessType|null $accessType The accessType property
    */
    private ?AccessType $accessType = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var IdentitySourceType|null $identitySource The identitySource property
    */
    private ?IdentitySourceType $identitySource = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var AclType|null $type The type property
    */
    private ?AclType $type = null;
    
    /**
     * @var string|null $value The value property
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new acl and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.acl');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Acl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Acl {
        return new Acl();
    }

    /**
     * Gets the accessType property value. The accessType property
     * @return AccessType|null
    */
    public function getAccessType(): ?AccessType {
        return $this->accessType;
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
        $o = $this;
        return  [
            'accessType' => function (ParseNode $n) use ($o) { $o->setAccessType($n->getEnumValue(AccessType::class)); },
            'identitySource' => function (ParseNode $n) use ($o) { $o->setIdentitySource($n->getEnumValue(IdentitySourceType::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(AclType::class)); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the identitySource property value. The identitySource property
     * @return IdentitySourceType|null
    */
    public function getIdentitySource(): ?IdentitySourceType {
        return $this->identitySource;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the type property value. The type property
     * @return AclType|null
    */
    public function getType(): ?AclType {
        return $this->type;
    }

    /**
     * Gets the value property value. The value property
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessType', $this->accessType);
        $writer->writeEnumValue('identitySource', $this->identitySource);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('type', $this->type);
        $writer->writeStringValue('value', $this->value);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessType property value. The accessType property
     *  @param AccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?AccessType $value ): void {
        $this->accessType = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the identitySource property value. The identitySource property
     *  @param IdentitySourceType|null $value Value to set for the identitySource property.
    */
    public function setIdentitySource(?IdentitySourceType $value ): void {
        $this->identitySource = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the type property value. The type property
     *  @param AclType|null $value Value to set for the type property.
    */
    public function setType(?AclType $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the value property value. The value property
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}
