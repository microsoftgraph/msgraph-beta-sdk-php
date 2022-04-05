<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\UploadNewVersion;

use Microsoft\Graph\Beta\Generated\Models\GroupPolicyUploadedLanguageFile;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class UploadNewVersionRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var StreamInterface|null $content The content property */
    private ?StreamInterface $content = null;
    
    /** @var array<GroupPolicyUploadedLanguageFile>|null $groupPolicyUploadedLanguageFiles The groupPolicyUploadedLanguageFiles property */
    private ?array $groupPolicyUploadedLanguageFiles = null;
    
    /**
     * Instantiates a new uploadNewVersionRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UploadNewVersionRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UploadNewVersionRequestBody {
        return new UploadNewVersionRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the content property value. The content property
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'content' => function (self $o, ParseNode $n) { $o->setContent($n->getBinaryContent()); },
            'groupPolicyUploadedLanguageFiles' => function (self $o, ParseNode $n) { $o->setGroupPolicyUploadedLanguageFiles($n->getCollectionOfObjectValues(GroupPolicyUploadedLanguageFile::class)); },
        ];
    }

    /**
     * Gets the groupPolicyUploadedLanguageFiles property value. The groupPolicyUploadedLanguageFiles property
     * @return array<GroupPolicyUploadedLanguageFile>|null
    */
    public function getGroupPolicyUploadedLanguageFiles(): ?array {
        return $this->groupPolicyUploadedLanguageFiles;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeCollectionOfObjectValues('groupPolicyUploadedLanguageFiles', $this->groupPolicyUploadedLanguageFiles);
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
     * Sets the content property value. The content property
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the groupPolicyUploadedLanguageFiles property value. The groupPolicyUploadedLanguageFiles property
     *  @param array<GroupPolicyUploadedLanguageFile>|null $value Value to set for the groupPolicyUploadedLanguageFiles property.
    */
    public function setGroupPolicyUploadedLanguageFiles(?array $value ): void {
        $this->groupPolicyUploadedLanguageFiles = $value;
    }

}
