<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class GroupPolicyUploadedDefinitionFile extends GroupPolicyDefinitionFile 
{
    /** @var StreamInterface|null $content The contents of the uploaded ADMX file. */
    private ?StreamInterface $content = null;
    
    /** @var string|null $defaultLanguageCode The default language of the uploaded ADMX file. */
    private ?string $defaultLanguageCode = null;
    
    /** @var array<GroupPolicyOperation>|null $groupPolicyOperations The list of operations on the uploaded ADMX file. */
    private ?array $groupPolicyOperations = null;
    
    /** @var array<GroupPolicyUploadedLanguageFile>|null $groupPolicyUploadedLanguageFiles The list of ADML files associated with the uploaded ADMX file. */
    private ?array $groupPolicyUploadedLanguageFiles = null;
    
    /** @var GroupPolicyUploadedDefinitionFileStatus|null $status The upload status of the uploaded ADMX file. Possible values are: none, uploadInProgress, available, assigned, removalInProgress, uploadFailed, removalFailed. */
    private ?GroupPolicyUploadedDefinitionFileStatus $status = null;
    
    /** @var DateTime|null $uploadDateTime The uploaded time of the uploaded ADMX file. */
    private ?DateTime $uploadDateTime = null;
    
    /**
     * Instantiates a new groupPolicyUploadedDefinitionFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyUploadedDefinitionFile
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyUploadedDefinitionFile {
        return new GroupPolicyUploadedDefinitionFile();
    }

    /**
     * Gets the content property value. The contents of the uploaded ADMX file.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * Gets the defaultLanguageCode property value. The default language of the uploaded ADMX file.
     * @return string|null
    */
    public function getDefaultLanguageCode(): ?string {
        return $this->defaultLanguageCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'content' => function (self $o, ParseNode $n) { $o->setContent($n->getBinaryContent()); },
            'defaultLanguageCode' => function (self $o, ParseNode $n) { $o->setDefaultLanguageCode($n->getStringValue()); },
            'groupPolicyOperations' => function (self $o, ParseNode $n) { $o->setGroupPolicyOperations($n->getCollectionOfObjectValues(GroupPolicyOperation::class)); },
            'groupPolicyUploadedLanguageFiles' => function (self $o, ParseNode $n) { $o->setGroupPolicyUploadedLanguageFiles($n->getCollectionOfObjectValues(GroupPolicyUploadedLanguageFile::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(GroupPolicyUploadedDefinitionFileStatus::class)); },
            'uploadDateTime' => function (self $o, ParseNode $n) { $o->setUploadDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the groupPolicyOperations property value. The list of operations on the uploaded ADMX file.
     * @return array<GroupPolicyOperation>|null
    */
    public function getGroupPolicyOperations(): ?array {
        return $this->groupPolicyOperations;
    }

    /**
     * Gets the groupPolicyUploadedLanguageFiles property value. The list of ADML files associated with the uploaded ADMX file.
     * @return array<GroupPolicyUploadedLanguageFile>|null
    */
    public function getGroupPolicyUploadedLanguageFiles(): ?array {
        return $this->groupPolicyUploadedLanguageFiles;
    }

    /**
     * Gets the status property value. The upload status of the uploaded ADMX file. Possible values are: none, uploadInProgress, available, assigned, removalInProgress, uploadFailed, removalFailed.
     * @return GroupPolicyUploadedDefinitionFileStatus|null
    */
    public function getStatus(): ?GroupPolicyUploadedDefinitionFileStatus {
        return $this->status;
    }

    /**
     * Gets the uploadDateTime property value. The uploaded time of the uploaded ADMX file.
     * @return DateTime|null
    */
    public function getUploadDateTime(): ?DateTime {
        return $this->uploadDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeStringValue('defaultLanguageCode', $this->defaultLanguageCode);
        $writer->writeCollectionOfObjectValues('groupPolicyOperations', $this->groupPolicyOperations);
        $writer->writeCollectionOfObjectValues('groupPolicyUploadedLanguageFiles', $this->groupPolicyUploadedLanguageFiles);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeDateTimeValue('uploadDateTime', $this->uploadDateTime);
    }

    /**
     * Sets the content property value. The contents of the uploaded ADMX file.
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the defaultLanguageCode property value. The default language of the uploaded ADMX file.
     *  @param string|null $value Value to set for the defaultLanguageCode property.
    */
    public function setDefaultLanguageCode(?string $value ): void {
        $this->defaultLanguageCode = $value;
    }

    /**
     * Sets the groupPolicyOperations property value. The list of operations on the uploaded ADMX file.
     *  @param array<GroupPolicyOperation>|null $value Value to set for the groupPolicyOperations property.
    */
    public function setGroupPolicyOperations(?array $value ): void {
        $this->groupPolicyOperations = $value;
    }

    /**
     * Sets the groupPolicyUploadedLanguageFiles property value. The list of ADML files associated with the uploaded ADMX file.
     *  @param array<GroupPolicyUploadedLanguageFile>|null $value Value to set for the groupPolicyUploadedLanguageFiles property.
    */
    public function setGroupPolicyUploadedLanguageFiles(?array $value ): void {
        $this->groupPolicyUploadedLanguageFiles = $value;
    }

    /**
     * Sets the status property value. The upload status of the uploaded ADMX file. Possible values are: none, uploadInProgress, available, assigned, removalInProgress, uploadFailed, removalFailed.
     *  @param GroupPolicyUploadedDefinitionFileStatus|null $value Value to set for the status property.
    */
    public function setStatus(?GroupPolicyUploadedDefinitionFileStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the uploadDateTime property value. The uploaded time of the uploaded ADMX file.
     *  @param DateTime|null $value Value to set for the uploadDateTime property.
    */
    public function setUploadDateTime(?DateTime $value ): void {
        $this->uploadDateTime = $value;
    }

}
