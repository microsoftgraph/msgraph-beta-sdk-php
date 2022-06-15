<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\Exclusions\Item\RemoveMembersById;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoveMembersByIdPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $ids The ids property
    */
    private ?array $ids = null;
    
    /**
     * @var string|null $memberEntityType The memberEntityType property
    */
    private ?string $memberEntityType = null;
    
    /**
     * Instantiates a new removeMembersByIdPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoveMembersByIdPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoveMembersByIdPostRequestBody {
        return new RemoveMembersByIdPostRequestBody();
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
            'ids' => function (ParseNode $n) use ($o) { $o->setIds($n->getCollectionOfPrimitiveValues()); },
            'memberEntityType' => function (ParseNode $n) use ($o) { $o->setMemberEntityType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the ids property value. The ids property
     * @return array<string>|null
    */
    public function getIds(): ?array {
        return $this->ids;
    }

    /**
     * Gets the memberEntityType property value. The memberEntityType property
     * @return string|null
    */
    public function getMemberEntityType(): ?string {
        return $this->memberEntityType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('ids', $this->ids);
        $writer->writeStringValue('memberEntityType', $this->memberEntityType);
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
     * Sets the ids property value. The ids property
     *  @param array<string>|null $value Value to set for the ids property.
    */
    public function setIds(?array $value ): void {
        $this->ids = $value;
    }

    /**
     * Sets the memberEntityType property value. The memberEntityType property
     *  @param string|null $value Value to set for the memberEntityType property.
    */
    public function setMemberEntityType(?string $value ): void {
        $this->memberEntityType = $value;
    }

}
