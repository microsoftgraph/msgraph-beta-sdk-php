<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReferenceAttachment extends Attachment implements Parsable 
{
    /**
     * Instantiates a new ReferenceAttachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.referenceAttachment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReferenceAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReferenceAttachment {
        return new ReferenceAttachment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isFolder' => fn(ParseNode $n) => $o->setIsFolder($n->getBooleanValue()),
            'permission' => fn(ParseNode $n) => $o->setPermission($n->getEnumValue(ReferenceAttachmentPermission::class)),
            'previewUrl' => fn(ParseNode $n) => $o->setPreviewUrl($n->getStringValue()),
            'providerType' => fn(ParseNode $n) => $o->setProviderType($n->getEnumValue(ReferenceAttachmentProvider::class)),
            'sourceUrl' => fn(ParseNode $n) => $o->setSourceUrl($n->getStringValue()),
            'thumbnailUrl' => fn(ParseNode $n) => $o->setThumbnailUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isFolder property value. Specifies whether the attachment is a link to a folder. Must set this to true if sourceUrl is a link to a folder. Optional.
     * @return bool|null
    */
    public function getIsFolder(): ?bool {
        return $this->getBackingStore()->get('isFolder');
    }

    /**
     * Gets the permission property value. Specifies the permissions granted for the attachment by the type of provider in providerType. Possible values are: other, view, edit, anonymousView, anonymousEdit, organizationView, organizationEdit. Optional.
     * @return ReferenceAttachmentPermission|null
    */
    public function getPermission(): ?ReferenceAttachmentPermission {
        return $this->getBackingStore()->get('permission');
    }

    /**
     * Gets the previewUrl property value. Applies to only a reference attachment of an image - URL to get a preview image. Use thumbnailUrl and previewUrl only when sourceUrl identifies an image file. Optional.
     * @return string|null
    */
    public function getPreviewUrl(): ?string {
        return $this->getBackingStore()->get('previewUrl');
    }

    /**
     * Gets the providerType property value. The type of provider that supports an attachment of this contentType. Possible values are: other, oneDriveBusiness, oneDriveConsumer, dropbox. Optional.
     * @return ReferenceAttachmentProvider|null
    */
    public function getProviderType(): ?ReferenceAttachmentProvider {
        return $this->getBackingStore()->get('providerType');
    }

    /**
     * Gets the sourceUrl property value. URL to get the attachment content. If this is a URL to a folder, then for the folder to be displayed correctly in Outlook or Outlook on the web, set isFolder to true. Required.
     * @return string|null
    */
    public function getSourceUrl(): ?string {
        return $this->getBackingStore()->get('sourceUrl');
    }

    /**
     * Gets the thumbnailUrl property value. Applies to only a reference attachment of an image - URL to get a thumbnail image. Use thumbnailUrl and previewUrl only when sourceUrl identifies an image file. Optional.
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->getBackingStore()->get('thumbnailUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isFolder', $this->getIsFolder());
        $writer->writeEnumValue('permission', $this->getPermission());
        $writer->writeStringValue('previewUrl', $this->getPreviewUrl());
        $writer->writeEnumValue('providerType', $this->getProviderType());
        $writer->writeStringValue('sourceUrl', $this->getSourceUrl());
        $writer->writeStringValue('thumbnailUrl', $this->getThumbnailUrl());
    }

    /**
     * Sets the isFolder property value. Specifies whether the attachment is a link to a folder. Must set this to true if sourceUrl is a link to a folder. Optional.
     *  @param bool|null $value Value to set for the isFolder property.
    */
    public function setIsFolder(?bool $value): void {
        $this->getBackingStore()->set('isFolder', $value);
    }

    /**
     * Sets the permission property value. Specifies the permissions granted for the attachment by the type of provider in providerType. Possible values are: other, view, edit, anonymousView, anonymousEdit, organizationView, organizationEdit. Optional.
     *  @param ReferenceAttachmentPermission|null $value Value to set for the permission property.
    */
    public function setPermission(?ReferenceAttachmentPermission $value): void {
        $this->getBackingStore()->set('permission', $value);
    }

    /**
     * Sets the previewUrl property value. Applies to only a reference attachment of an image - URL to get a preview image. Use thumbnailUrl and previewUrl only when sourceUrl identifies an image file. Optional.
     *  @param string|null $value Value to set for the previewUrl property.
    */
    public function setPreviewUrl(?string $value): void {
        $this->getBackingStore()->set('previewUrl', $value);
    }

    /**
     * Sets the providerType property value. The type of provider that supports an attachment of this contentType. Possible values are: other, oneDriveBusiness, oneDriveConsumer, dropbox. Optional.
     *  @param ReferenceAttachmentProvider|null $value Value to set for the providerType property.
    */
    public function setProviderType(?ReferenceAttachmentProvider $value): void {
        $this->getBackingStore()->set('providerType', $value);
    }

    /**
     * Sets the sourceUrl property value. URL to get the attachment content. If this is a URL to a folder, then for the folder to be displayed correctly in Outlook or Outlook on the web, set isFolder to true. Required.
     *  @param string|null $value Value to set for the sourceUrl property.
    */
    public function setSourceUrl(?string $value): void {
        $this->getBackingStore()->set('sourceUrl', $value);
    }

    /**
     * Sets the thumbnailUrl property value. Applies to only a reference attachment of an image - URL to get a thumbnail image. Use thumbnailUrl and previewUrl only when sourceUrl identifies an image file. Optional.
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value): void {
        $this->getBackingStore()->set('thumbnailUrl', $value);
    }

}
