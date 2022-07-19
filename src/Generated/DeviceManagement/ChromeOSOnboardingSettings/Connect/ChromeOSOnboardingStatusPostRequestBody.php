<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ChromeOSOnboardingSettings\Connect;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChromeOSOnboardingStatusPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $ownerAccessToken The ownerAccessToken property
    */
    private ?string $ownerAccessToken = null;
    
    /**
     * @var string|null $ownerUserPrincipalName The ownerUserPrincipalName property
    */
    private ?string $ownerUserPrincipalName = null;
    
    /**
     * Instantiates a new ChromeOSOnboardingStatusPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChromeOSOnboardingStatusPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChromeOSOnboardingStatusPostRequestBody {
        return new ChromeOSOnboardingStatusPostRequestBody();
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
            'ownerAccessToken' => function (ParseNode $n) use ($o) { $o->setOwnerAccessToken($n->getStringValue()); },
            'ownerUserPrincipalName' => function (ParseNode $n) use ($o) { $o->setOwnerUserPrincipalName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the ownerAccessToken property value. The ownerAccessToken property
     * @return string|null
    */
    public function getOwnerAccessToken(): ?string {
        return $this->ownerAccessToken;
    }

    /**
     * Gets the ownerUserPrincipalName property value. The ownerUserPrincipalName property
     * @return string|null
    */
    public function getOwnerUserPrincipalName(): ?string {
        return $this->ownerUserPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ownerAccessToken', $this->ownerAccessToken);
        $writer->writeStringValue('ownerUserPrincipalName', $this->ownerUserPrincipalName);
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
     * Sets the ownerAccessToken property value. The ownerAccessToken property
     *  @param string|null $value Value to set for the ownerAccessToken property.
    */
    public function setOwnerAccessToken(?string $value ): void {
        $this->ownerAccessToken = $value;
    }

    /**
     * Sets the ownerUserPrincipalName property value. The ownerUserPrincipalName property
     *  @param string|null $value Value to set for the ownerUserPrincipalName property.
    */
    public function setOwnerUserPrincipalName(?string $value ): void {
        $this->ownerUserPrincipalName = $value;
    }

}
