<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Drives\Item\Root\Permissions\Item\RevokeGrants;

use Microsoft\Graph\Beta\Generated\Models\DriveRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RevokeGrantsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DriveRecipient>|null $grantees The grantees property
    */
    private ?array $grantees = null;
    
    /**
     * Instantiates a new revokeGrantsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RevokeGrantsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RevokeGrantsPostRequestBody {
        return new RevokeGrantsPostRequestBody();
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
            'grantees' => fn(ParseNode $n) => $o->setGrantees($n->getCollectionOfObjectValues([DriveRecipient::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the grantees property value. The grantees property
     * @return array<DriveRecipient>|null
    */
    public function getGrantees(): ?array {
        return $this->grantees;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('grantees', $this->grantees);
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
     * Sets the grantees property value. The grantees property
     *  @param array<DriveRecipient>|null $value Value to set for the grantees property.
    */
    public function setGrantees(?array $value ): void {
        $this->grantees = $value;
    }

}
