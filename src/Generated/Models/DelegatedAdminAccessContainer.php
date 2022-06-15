<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminAccessContainer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $accessContainerId The identifier of the access container (for example, a security group). For 'securityGroup' access containers, this must be a valid ID of an Azure AD security group in the Microsoft partner's tenant.
    */
    private ?string $accessContainerId = null;
    
    /**
     * @var DelegatedAdminAccessContainerType|null $accessContainerType The type of access container (for example, security group) that will be assigned one or more roles through a delegated admin relationship. The possible values are: securityGroup, unknownFutureValue.
    */
    private ?DelegatedAdminAccessContainerType $accessContainerType = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * Instantiates a new delegatedAdminAccessContainer and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminAccessContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminAccessContainer {
        return new DelegatedAdminAccessContainer();
    }

    /**
     * Gets the accessContainerId property value. The identifier of the access container (for example, a security group). For 'securityGroup' access containers, this must be a valid ID of an Azure AD security group in the Microsoft partner's tenant.
     * @return string|null
    */
    public function getAccessContainerId(): ?string {
        return $this->accessContainerId;
    }

    /**
     * Gets the accessContainerType property value. The type of access container (for example, security group) that will be assigned one or more roles through a delegated admin relationship. The possible values are: securityGroup, unknownFutureValue.
     * @return DelegatedAdminAccessContainerType|null
    */
    public function getAccessContainerType(): ?DelegatedAdminAccessContainerType {
        return $this->accessContainerType;
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
            'accessContainerId' => function (ParseNode $n) use ($o) { $o->setAccessContainerId($n->getStringValue()); },
            'accessContainerType' => function (ParseNode $n) use ($o) { $o->setAccessContainerType($n->getEnumValue(DelegatedAdminAccessContainerType::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accessContainerId', $this->accessContainerId);
        $writer->writeEnumValue('accessContainerType', $this->accessContainerType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessContainerId property value. The identifier of the access container (for example, a security group). For 'securityGroup' access containers, this must be a valid ID of an Azure AD security group in the Microsoft partner's tenant.
     *  @param string|null $value Value to set for the accessContainerId property.
    */
    public function setAccessContainerId(?string $value ): void {
        $this->accessContainerId = $value;
    }

    /**
     * Sets the accessContainerType property value. The type of access container (for example, security group) that will be assigned one or more roles through a delegated admin relationship. The possible values are: securityGroup, unknownFutureValue.
     *  @param DelegatedAdminAccessContainerType|null $value Value to set for the accessContainerType property.
    */
    public function setAccessContainerType(?DelegatedAdminAccessContainerType $value ): void {
        $this->accessContainerType = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

}
