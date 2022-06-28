<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource extends AccessReviewInstanceDecisionItemResource implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $accessPackageDisplayName Display name of the access package to which access has been granted.
    */
    private ?string $accessPackageDisplayName = null;
    
    /**
     * @var string|null $accessPackageId Identifier of the access package to which access has been granted.
    */
    private ?string $accessPackageId = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * Instantiates a new AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource {
        return new AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource();
    }

    /**
     * Gets the accessPackageDisplayName property value. Display name of the access package to which access has been granted.
     * @return string|null
    */
    public function getAccessPackageDisplayName(): ?string {
        return $this->accessPackageDisplayName;
    }

    /**
     * Gets the accessPackageId property value. Identifier of the access package to which access has been granted.
     * @return string|null
    */
    public function getAccessPackageId(): ?string {
        return $this->accessPackageId;
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
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageDisplayName' => function (ParseNode $n) use ($o) { $o->setAccessPackageDisplayName($n->getStringValue()); },
            'accessPackageId' => function (ParseNode $n) use ($o) { $o->setAccessPackageId($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessPackageDisplayName', $this->accessPackageDisplayName);
        $writer->writeStringValue('accessPackageId', $this->accessPackageId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessPackageDisplayName property value. Display name of the access package to which access has been granted.
     *  @param string|null $value Value to set for the accessPackageDisplayName property.
    */
    public function setAccessPackageDisplayName(?string $value ): void {
        $this->accessPackageDisplayName = $value;
    }

    /**
     * Sets the accessPackageId property value. Identifier of the access package to which access has been granted.
     *  @param string|null $value Value to set for the accessPackageId property.
    */
    public function setAccessPackageId(?string $value ): void {
        $this->accessPackageId = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

}
