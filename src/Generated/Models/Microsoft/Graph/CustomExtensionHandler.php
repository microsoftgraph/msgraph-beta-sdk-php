<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomExtensionHandler extends Entity 
{
    /** @var CustomAccessPackageWorkflowExtension|null $customExtension Indicates which custom workflow extension will be executed at this stage. Nullable. Supports $expand. */
    private ?CustomAccessPackageWorkflowExtension $customExtension = null;
    
    /** @var AccessPackageCustomExtensionStage|null $stage Indicates the stage of the access package assignment request workflow when the access package custom extension runs. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue. */
    private ?AccessPackageCustomExtensionStage $stage = null;
    
    /**
     * Instantiates a new customExtensionHandler and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomExtensionHandler
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CustomExtensionHandler {
        return new CustomExtensionHandler();
    }

    /**
     * Gets the customExtension property value. Indicates which custom workflow extension will be executed at this stage. Nullable. Supports $expand.
     * @return CustomAccessPackageWorkflowExtension|null
    */
    public function getCustomExtension(): ?CustomAccessPackageWorkflowExtension {
        return $this->customExtension;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'customExtension' => function (self $o, ParseNode $n) { $o->setCustomExtension($n->getObjectValue(CustomAccessPackageWorkflowExtension::class)); },
            'stage' => function (self $o, ParseNode $n) { $o->setStage($n->getEnumValue(AccessPackageCustomExtensionStage::class)); },
        ]);
    }

    /**
     * Gets the stage property value. Indicates the stage of the access package assignment request workflow when the access package custom extension runs. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
     * @return AccessPackageCustomExtensionStage|null
    */
    public function getStage(): ?AccessPackageCustomExtensionStage {
        return $this->stage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('customExtension', $this->customExtension);
        $writer->writeEnumValue('stage', $this->stage);
    }

    /**
     * Sets the customExtension property value. Indicates which custom workflow extension will be executed at this stage. Nullable. Supports $expand.
     *  @param CustomAccessPackageWorkflowExtension|null $value Value to set for the customExtension property.
    */
    public function setCustomExtension(?CustomAccessPackageWorkflowExtension $value ): void {
        $this->customExtension = $value;
    }

    /**
     * Sets the stage property value. Indicates the stage of the access package assignment request workflow when the access package custom extension runs. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
     *  @param AccessPackageCustomExtensionStage|null $value Value to set for the stage property.
    */
    public function setStage(?AccessPackageCustomExtensionStage $value ): void {
        $this->stage = $value;
    }

}
