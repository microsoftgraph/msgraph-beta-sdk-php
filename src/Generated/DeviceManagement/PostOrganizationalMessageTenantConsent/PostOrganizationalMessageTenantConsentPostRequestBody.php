<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\PostOrganizationalMessageTenantConsent;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PostOrganizationalMessageTenantConsentPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $firstPartyMessageAllowed The firstPartyMessageAllowed property
    */
    private ?bool $firstPartyMessageAllowed = null;
    
    /**
     * Instantiates a new postOrganizationalMessageTenantConsentPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostOrganizationalMessageTenantConsentPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostOrganizationalMessageTenantConsentPostRequestBody {
        return new PostOrganizationalMessageTenantConsentPostRequestBody();
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
            'firstPartyMessageAllowed' => fn(ParseNode $n) => $o->setFirstPartyMessageAllowed($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the firstPartyMessageAllowed property value. The firstPartyMessageAllowed property
     * @return bool|null
    */
    public function getFirstPartyMessageAllowed(): ?bool {
        return $this->firstPartyMessageAllowed;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('firstPartyMessageAllowed', $this->firstPartyMessageAllowed);
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
     * Sets the firstPartyMessageAllowed property value. The firstPartyMessageAllowed property
     *  @param bool|null $value Value to set for the firstPartyMessageAllowed property.
    */
    public function setFirstPartyMessageAllowed(?bool $value ): void {
        $this->firstPartyMessageAllowed = $value;
    }

}
