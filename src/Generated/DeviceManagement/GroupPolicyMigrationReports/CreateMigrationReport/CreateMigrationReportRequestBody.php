<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\CreateMigrationReport;

use Microsoft\Graph\Beta\Generated\Models\GroupPolicyObjectFile;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateMigrationReportRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var GroupPolicyObjectFile|null $groupPolicyObjectFile The groupPolicyObjectFile property */
    private ?GroupPolicyObjectFile $groupPolicyObjectFile = null;
    
    /**
     * Instantiates a new createMigrationReportRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateMigrationReportRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CreateMigrationReportRequestBody {
        return new CreateMigrationReportRequestBody();
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
        return  [
            'groupPolicyObjectFile' => function (self $o, ParseNode $n) { $o->setGroupPolicyObjectFile($n->getObjectValue(GroupPolicyObjectFile::class)); },
        ];
    }

    /**
     * Gets the groupPolicyObjectFile property value. The groupPolicyObjectFile property
     * @return GroupPolicyObjectFile|null
    */
    public function getGroupPolicyObjectFile(): ?GroupPolicyObjectFile {
        return $this->groupPolicyObjectFile;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('groupPolicyObjectFile', $this->groupPolicyObjectFile);
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
     * Sets the groupPolicyObjectFile property value. The groupPolicyObjectFile property
     *  @param GroupPolicyObjectFile|null $value Value to set for the groupPolicyObjectFile property.
    */
    public function setGroupPolicyObjectFile(?GroupPolicyObjectFile $value ): void {
        $this->groupPolicyObjectFile = $value;
    }

}
