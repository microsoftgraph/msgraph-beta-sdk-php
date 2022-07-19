<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InboundSharedUserProfile implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $homeTenantId The homeTenantId property
    */
    private ?string $homeTenantId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName The userPrincipalName property
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new inboundSharedUserProfile and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.inboundSharedUserProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InboundSharedUserProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InboundSharedUserProfile {
        return new InboundSharedUserProfile();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'homeTenantId' => function (ParseNode $n) use ($o) { $o->setHomeTenantId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the homeTenantId property value. The homeTenantId property
     * @return string|null
    */
    public function getHomeTenantId(): ?string {
        return $this->homeTenantId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('homeTenantId', $this->homeTenantId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
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
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the homeTenantId property value. The homeTenantId property
     *  @param string|null $value Value to set for the homeTenantId property.
    */
    public function setHomeTenantId(?string $value ): void {
        $this->homeTenantId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the userId property value. The userId property
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
